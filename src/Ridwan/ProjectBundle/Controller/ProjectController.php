<?php

namespace Ridwan\ProjectBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ProjectController extends Controller {

    public function authenticateAction() {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('RidwanEntityBundle:User');
        $id = $session->get('user');
        $user = $repository->findOneBy(array('id' => $id));
        if ($user) {
            return $user;
        } else {
            return false;
        }
    }

    public function indexAction(Request $request) {
        $user = $this->authenticateAction();
        
        if ($user) {
            $em = $this->getDoctrine()->getManager();
            $ProjectRepository = $em->getRepository('RidwanEntityBundle:Project');
            $NotificationRepository = $em->getRepository('RidwanEntityBundle:Notification');
            $NotificationsQuery = $NotificationRepository->createQueryBuilder('p')
                    ->where('p.userid = :id AND p.seen = 0')
                    ->setParameter('id', $user->getId())
                    ->setMaxResults(10)
                    ->orderBy('p.id', 'DESC')
                    ->getQuery();
	    $Notifications = $NotificationsQuery->getResult();
            $CompleteProjectQuery = $ProjectRepository->createQueryBuilder('p')
                    ->where('p.status=1')
                    ->orderBy('p.id', 'DESC')
                    ->getQuery();

            $IncompleteProjectQuery = $ProjectRepository->createQueryBuilder('p')
                    ->where('p.status=0')
                    ->orderBy('p.id', 'DESC')
                    ->getQuery();
            $CompletedProject = $CompleteProjectQuery->getResult();
            $IncompleteProject = $IncompleteProjectQuery->getResult();
            return $this->render('RidwanProjectBundle:Projects:message.html.twig', array(
                        'Projects' => $CompletedProject,
                        'IProjects' => $IncompleteProject,
                        'message' => $request->get('message'),
                        'type' => $request->get('type'),
                        'Notifications' => $Notifications
            ));
        }
        return $this->redirect($this->generateUrl('ridwan_site_login'));
    }

    public function newProjectAction(Request $request) {
        $user = $this->authenticateAction();
        if ($user) {
            $access = $user->getAccesslevel();
            $em = $this->getDoctrine()->getManager();
            $NotificationRepository = $em->getRepository('RidwanEntityBundle:Notification');
            $NotificationsQuery = $NotificationRepository->createQueryBuilder('p')
                    ->where('p.userid = :id AND p.seen = 0')
                    ->setParameter('id', $user->getId())
                    ->setMaxResults(10)
                    ->orderBy('p.id', 'DESC')
                    ->getQuery();
	    $Notifications = $NotificationsQuery->getResult();
            if ($access == 'Head' || $access == 'Admin') {
                $project = new Project();
                $form = $this->createForm(new ProjectType(), $project, array(
                    'action' => $this->generateUrl('ridwan_project_new'),
                    'attr' => array(
                        'class' => 'form-horizontal center'
                    )
                ));
                $form->handleRequest($request);

                if ($form->isValid()) {
                    $project = $form->getData();
//$task->setEndtimestamp($task->getEndtimestamp()->getTimeStamp());
//$task->setStarttimestamp($task->getStarttimestamp()->getTimeStamp());
                    $Manager = $project->getManager();
                    $project->setManager($Manager->getId());
                    $project->setStatus(0);

                    $em = $this->getDoctrine()->getManager();


                    $subscribers = array();
                    $subscribers[] = $Manager->getId();
                    
                    $project->setSubscribers($subscribers);

                    try {
                        $em->persist($project);
                        $em->flush();
                    } catch (\Exception $e) {
                        // echo $e;
                        return $this->render('RidwanProjectBundle:Projects:new.html.twig', array(
                                    'message' => ' Opz! something went wrong!',
                                    'type' => 'E',
                                    'Notifications' => $Notifications,
                                    'form' => $form->createView()
                        ));
                    }

                    $repository = $em->getRepository('RidwanEntityBundle:Project');
                    $newProject = $repository->findOneBy(array('name' => $project->getName()));
                    $this->setNotification('You have a new Project', "Congratulations! You have been appointed as a Project Manager for a new Project", 2, $newProject->getManager(), $newProject->getId());



                    return $this->redirect($this->generateUrl('ridwan_project_index', array(
                                        'type' => 'S',
                                        'message' => "succesfully created new project and notified " . $Manager->getFirstname())));
                }

                return $this->render('RidwanProjectBundle:Projects:new.html.twig', array(
                            'form' => $form->createView(),
                            'Notifications' => $Notifications
                ));
            } else {
                return $this->render('RidwanStyleBundle:Error:permission.html.twig',array(
                	'Notifications' => $Notifications
                	));
            }
        }
        return $this->redirect($this->generateUrl('ridwan_site_login'));
    }

    public function detailsAction($projectID, Request $request) {
        $user = $this->authenticateAction();
        if ($user) {
            $NewComment = New Comments();
            $NewComment->setTask(0);
            $NewComment->setProject($projectID);
            $CommentForm = $this->createForm(new CommentsType(), $NewComment, array(
                'action' => $this->generateUrl('ridwan_comment_new'),
                'attr' => array(
                    'class' => 'form-horizontal center'
                )
            ));
            $em = $this->getDoctrine()->getManager();
            $ProjectRepository = $em->getRepository('RidwanEntityBundle:Project');
            $Project = $ProjectRepository->find($projectID);
            $NotificationRepository = $em->getRepository('RidwanEntityBundle:Notification');
            $NotificationsQuery = $NotificationRepository->createQueryBuilder('p')
                    ->where('p.userid = :id AND p.seen = 0')
                    ->setParameter('id', $user->getId())
                    ->setMaxResults(10)
                    ->orderBy('p.id', 'DESC')
                    ->getQuery();
	    $Notifications = $NotificationsQuery->getResult();
            if ($Project == null){
            	return $this->render('RidwanStyleBundle:Error:error.html.twig', array(
            	'message'=>" Project doesn't exists",'Notifications' => $Notifications));
            }
            $Comments = $this->getCommentsAction($projectID);
            $Members = $this->getMembersAction($Project);
            $Tasks = $this->getTasksAction($Project);
            $Manager = $this->getUserAction($Project->getManager());
            return $this->render('RidwanProjectBundle:Projects:details.html.twig', array(
                        'Tasks' => $Tasks,
                        'Comments' => $Comments,
                        'NewComment' => $CommentForm->createView(),
                        'Manager' => $Manager,
                        'Project' => $Project,
                        'Members' => $Members,
                        'message' => $request->get('message'),
                        'type' => $request->get('type'),
                        'Notifications' => $Notifications
            ));
        }
        return $this->redirect($this->generateUrl('ridwan_site_login'));
    }

    private function getCommentsAction($projectID) {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT c.id,c.user, c.comment, c.project, c.task, c.timestamp, u.firstname, u.lastname, u.path FROM Ridwan\EntityBundle\Entity\User u,Ridwan\EntityBundle\Entity\Comments c WHERE  u.id = c.user AND c.project =:projectID')
                ->setParameter('projectID', $projectID);

        $comments = $query->getResult();
        return $comments;
    }

    private function getTasksAction($Project) {
        $em = $this->getDoctrine()->getManager();
        $TaskRepository = $em->getRepository('RidwanEntityBundle:Task');
        $Tasks = $TaskRepository->findBy(array("project"=>$Project->getId())); 
        $TaskDetails = array();
        if ($Tasks != null) {
            foreach ($Tasks as $task) {               
                $ManagerName = $this->getUserAction($task->getLeader())->getFirstName();
                $UserName = $this->getUserAction($task->getUser())->getFirstName();
                $TaskDetails[] = array($task->getId(), $task->getCompleted(), $task->getName(), $task->getType(), $task->getUser(), $UserName, $task->getLeader(), $ManagerName);
            }
            return $TaskDetails;
        }
        return null;
    }

    public function completeAction(Request $request) {
        $user = $this->authenticateAction();
        if ($user) {

            $projectID = $request->get('projectID');
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('RidwanEntityBundle:Project');
            $project = $repository->find($projectID);
            $project->setEnd(new \DateTime());
            $project->setStatus(1);
            $NotificationRepository = $em->getRepository('RidwanEntityBundle:Notification');
            $NotificationsQuery = $NotificationRepository->createQueryBuilder('p')
                    ->where('p.userid = :id AND p.seen = 0')
                    ->setParameter('id', $user->getId())
                    ->setMaxResults(10)
                    ->orderBy('p.id', 'DESC')
                    ->getQuery();
	    $Notifications = $NotificationsQuery->getResult();

            try {
                $em->persist($project);
                $em->flush();
            } catch (\Exception $e) {
                // echo $e;
                return $this->redirect($this->generateUrl('ridwan_project_details', array(
                                    'type' => 'E',
                                    'message' => " opz! somethings went wrong!",
                                    'projectID' => $projectID,
                                    'Notifications' => $Notifications
                )));
            }

            $this->setNotification('Project Completed', "Congratulations! You have completed your Project", 3, $project->getManager(), $project->getId());


            return $this->redirect($this->generateUrl('ridwan_project_details', array(
                                'type' => 'S',
                                'message' => " successfully saved changes and notified user",
                                'projectID' => $projectID
            )));
        }

        return $this->redirect($this->generateUrl('ridwan_site_login'));
    }

    private function getMembersAction($Project) {
        $Members = $Project->getMembers();
        $MembersDetails = array();
        if ($Members != null) {
            foreach ($Members as $memberID) {
                $member = $this->getUserAction($memberID);
                $MembersDetails[] = array($member->getId(), $member->getFirstname() . " " . $member->getLastname(), $member->getPillar(), $member->getPath());
            }
            return $MembersDetails;
        }
        return null;
    }

    private function getUserAction($userID) {
        $em = $this->getDoctrine()->getManager();
        $UserRepository = $em->getRepository('RidwanEntityBundle:User');
        $manager = $UserRepository->find(array('id' => $userID));
        return $manager;
    }
    
     public function deleteProjectAction(Request $request) {
        $user = $this->authenticateAction();
        if ($user) {
            $access = $user->getAccesslevel();
            if ($access == 'Head' || $access == 'Admin') {
                $id = $request->get('id');
                $em = $this->getDoctrine()->getManager();
                $Project = $em->getRepository('RidwanEntityBundle:Project')->find($id);	
		$Tasks = $em->getRepository('RidwanEntityBundle:Task')->findBy(array("project"=>$id));
		$NotificationRepository = $em->getRepository('RidwanEntityBundle:Notification');
            $NotificationsQuery = $NotificationRepository->createQueryBuilder('p')
                    ->where('p.userid = :id AND p.seen = 0')
                    ->setParameter('id', $user->getId())
                    ->setMaxResults(10)
                    ->orderBy('p.id', 'DESC')
                    ->getQuery();
	    $Notifications = $NotificationsQuery->getResult();
		if ($Tasks != null){
			foreach ($Tasks as $task){
				 $em->remove($task);
			}
		}
			
		$Comments = $em->getRepository('RidwanEntityBundle:Comments')->findBy(array("project"=>$id));
		if ($Comments != null){
			foreach ($Comments as $comment){
				 $em->remove($comment);
			}
		}
		
		$Notifications = $em->getRepository('RidwanEntityBundle:Notification')->findBy(array("project"=>$id));
		
		if ($Notifications != null){
			foreach ($Notifications as $notification){
			 	$em->remove($notification);
			}
		}
                if (!$Project) {
                    return $this->redirect($this->generateUrl('ridwan_project_index', array(
                                        'type' => 'E',
                                        'message' => " opz! could not find project")));
                }

                try {
                    $em->remove($Project);               	
                    $em->flush();
                } catch (\Exception $e) {
                	
                    return $this->redirect($this->generateUrl('ridwan_project_index', array(
                                        'type' => 'E',
                                        'message' => " opz! could not delete project")));
                }
                
                
                
                

                return $this->redirect($this->generateUrl('ridwan_project_index', array(
                                    'type' => 'S',
                                    'message' => " successfully deleted the project")));
            } else {
                return $this->render('RidwanStyleBundle:Error:permission.html.twig',array(
                	'Notifications' => $Notifications
                ));
            }
        }
        return $this->redirect($this->generateUrl('ridwan_site_login'));
    }


    public function editProjectAction(Request $request, $projectID) {

        $user = $this->authenticateAction();
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('RidwanEntityBundle:Project');
        $project = $repository->find($projectID);
        $Manager = $this->getUserAction($project->getManager());
        $NotificationRepository = $em->getRepository('RidwanEntityBundle:Notification');
            $NotificationsQuery = $NotificationRepository->createQueryBuilder('p')
                    ->where('p.userid = :id AND p.seen = 0')
                    ->setParameter('id', $user->getId())
                    ->setMaxResults(10)
                    ->orderBy('p.id', 'DESC')
                    ->getQuery();
	    $Notifications = $NotificationsQuery->getResult();

        if ($user) {
            $access = $user->getAccesslevel();
            if ($access == 'Head' || $access == 'Admin' || $user == $Manager) {

                $form = $this->createForm(new ProjectType(), $project, array(
                    'action' => $this->generateUrl('ridwan_project_edit', array('projectID' => $projectID)),
                    'method' => 'PUT',
                    'attr' => array(
                        'class' => 'form-horizontal center'
                    )
                ));
                $form->handleRequest($request);

                if ($form->isValid()) {
                    $project->setManager($Manager->getId());

                    $em->persist($project);
                    try {
                        $em->flush();
                    } catch (\Exception $e) {
                        // echo $e;
                        return $this->render('RidwanProjectBundle:Project:edit.html.twig', array(
                                    'message' => ' Opz! something went wrong!',
                                    'type' => 'E',
                                    'form' => $form->createView(),
                                    'Notifications' => $Notifications
                        ));
                    }


                    $this->setNotification('Project Details Updated', "Details of your project has been updated. Click the following link to get the latest details.", 1, $project->getManager(), $project->getId());


                    return $this->redirect($this->generateUrl('ridwan_project_index', array(
                                        'type' => 'S',
                                        'message' => "succesfully updated new details and notified " . $Manager->getFirstname())));
                }

                return $this->render('RidwanProjectBundle:Projects:edit.html.twig', array(
                            'form' => $form->createView(),
                            'Notifications' => $Notifications
                ));
            } else {
                return $this->render('RidwanStyleBundle:Error:permission.html.twig',array(
                	'Notifications' => $Notifications
                ));
            }
        }
        return $this->redirect($this->generateUrl('ridwan_site_login'));
    }

    private function setNotification($heading, $message, $type, $user, $project) {
        $em = $this->getDoctrine()->getManager();
        $notification = new Notification();
        $notification->setTask(0);
        $notification->setHeading($heading);
        $notification->setDetails($message);
        $notification->setProject($project);
        $notification->setSeen(0);
        $notification->setTimestamp(new \DateTime());
        $notification->setType($type);
        $notification->setUserid($user);
        $em->persist($notification);
        $em->flush();
    }
    
    public function notificationAction($projectID,$notificationID){
    	$user = $this->authenticateAction();
    	if($user){
    		$em = $this->getDoctrine()->getManager();
        	$Repository = $em->getRepository('RidwanEntityBundle:Notification');
        	$notification = $Repository->find($notificationID);
        	$notification->setSeen(1);
        	$em->persist($notification);
        	$em->flush();
        
        	return $this->redirect($this->generateUrl('ridwan_project_details',array('projectID'=>$projectID)));
    	}
    }

}