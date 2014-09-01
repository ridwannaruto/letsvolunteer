<?php

namespace ridwan\TaskBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class OpportunityController extends Controller {

    public function authenticateAction() {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('ridwanEntityBundle:User');
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
            $type = $user->getAccessLevel();
            $pillar = $user->getPillar();
//echo $pillar;
            $em = $this->getDoctrine()->getManager();
            $TaskRepository = $em->getRepository('ridwanEntityBundle:Task');
            $NotificationRepository = $em->getRepository('ridwanEntityBundle:Notification');
            $NotificationsQuery = $NotificationRepository->createQueryBuilder('p')
                    ->where('p.userid = :id AND p.seen = 0')
                    ->setParameter('id', $user->getId())
                    ->setMaxResults(10)
                    ->orderBy('p.id', 'DESC')
                    ->getQuery();
	    $Notifications = $NotificationsQuery->getResult();
            if ($type == 'Admin') {
                $CompleteTaskQuery = $em->createQuery('SELECT t.id,t.user,t.name as taskname,t.pillar, t.description, t.project, p.name as projectname, u.firstname, u.lastname FROM ridwan\EntityBundle\Entity\User u,ridwan\EntityBundle\Entity\Task t, ridwan\EntityBundle\Entity\Project p WHERE  t.user = u.id AND t.project = p.id AND t.completed=1');
                $IncompleteTaskQuery = $em->createQuery('SELECT t.id,t.user,t.name as taskname,t.pillar, t.description, t.project, p.name as projectname, u.firstname, u.lastname FROM ridwan\EntityBundle\Entity\User u,ridwan\EntityBundle\Entity\Task t, ridwan\EntityBundle\Entity\Project p WHERE  t.user = u.id AND t.project = p.id AND t.completed=0');
             
                
               
                $CompletedTasks = $CompleteTaskQuery->getResult();
                $IncompleteTasks = $IncompleteTaskQuery->getResult();
                return $this->render('ridwanTaskBundle:Tasks:message.html.twig', array(
                            'Tasks' => $CompletedTasks,
                            'ITasks' => $IncompleteTasks,
                            'message' => $request->get('message'),
                            'type' => $request->get('type'),
                            'Notifications' => $Notifications
                ));
            }
            if ($type == 'Head') {

$CompleteTaskQuery = $em->createQuery('SELECT t.id,t.user,t.name as taskname,t.pillar, t.description, t.project, p.name as projectname, u.firstname, u.lastname FROM ridwan\EntityBundle\Entity\User u,ridwan\EntityBundle\Entity\Task t, ridwan\EntityBundle\Entity\Project p WHERE  t.user = u.id AND t.project = p.id AND t.completed=1 AND t.pillar=:pillar ORDER by t.id DESC')->setParameter('pillar', $pillar);
                $IncompleteTaskQuery = $em->createQuery('SELECT t.id,t.user,t.name as taskname,t.pillar, t.description, t.project, p.name as projectname, u.firstname, u.lastname FROM ridwan\EntityBundle\Entity\User u,ridwan\EntityBundle\Entity\Task t, ridwan\EntityBundle\Entity\Project p WHERE  t.user = u.id AND t.project = p.id AND t.completed=0 AND t.pillar=:pillar ORDER by t.id DESC')->setParameter('pillar', $pillar);

               
                $CompletedTasks = $CompleteTaskQuery->getResult();
                $IncompleteTasks = $IncompleteTaskQuery->getResult();
                return $this->render('ridwanTaskBundle:Tasks:message.html.twig', array(
                            'Tasks' => $CompletedTasks,
                            'ITasks' => $IncompleteTasks,
                            'message' => $request->get('message'),
                            'type' => $request->get('type'),
                            'Notifications' => $Notifications
                ));
            } else {

$CompleteTaskQuery = $em->createQuery('SELECT t.id,t.user,t.name as taskname,t.pillar, t.description, t.project, p.name as projectname, u.firstname, u.lastname FROM ridwan\EntityBundle\Entity\User u,ridwan\EntityBundle\Entity\Task t, ridwan\EntityBundle\Entity\Project p WHERE  t.user = u.id AND t.project = p.id AND t.completed=1 AND t.user=:userID ORDER by t.id DESC')->setParameter('userID', $user->getId());
                $IncompleteTaskQuery = $em->createQuery('SELECT t.id,t.user,t.name as taskname,t.pillar, t.description, t.project, p.name as projectname, u.firstname, u.lastname FROM ridwan\EntityBundle\Entity\User u,ridwan\EntityBundle\Entity\Task t, ridwan\EntityBundle\Entity\Project p WHERE  t.user = u.id AND t.project = p.id AND t.completed=0 AND t.user=:userID ORDER by t.id DESC')->setParameter('userID', $user->getId());

                $CompletedTasks = $CompleteTaskQuery->getResult();
                $IncompleteTasks = $IncompleteTaskQuery->getResult();

                return $this->render('ridwanTaskBundle:Tasks:message.html.twig', array(
                            'Tasks' => $CompletedTasks,
                            'ITasks' => $IncompleteTasks,
                            'Notifications' => $Notifications
                ));
            }
        }

        return $this->redirect($this->generateUrl('ridwan_site_login'));
    }

    public function detailAction($taskID, Request $request) {    
    	$user = $this->authenticateAction();
        if ($user) {
            $NewComment = New Comments();
            $NewComment->setProject(0);
            $NewComment->setTask($taskID);
            $CommentForm = $this->createForm(new CommentsType(), $NewComment, array(
                    'action' => $this->generateUrl('ridwan_comment_new'),
                    'attr' => array(
                        'class' => 'form-horizontal center'
                    )
            ));
            $em = $this->getDoctrine()->getManager();
            $TaskRepository = $em->getRepository('ridwanEntityBundle:Task');
            $Task = $TaskRepository->find($taskID);
            $NotificationRepository = $em->getRepository('ridwanEntityBundle:Notification');
            $NotificationsQuery = $NotificationRepository->createQueryBuilder('p')
                    ->where('p.userid = :id AND p.seen = 0')
                    ->setParameter('id', $user->getId())
                    ->setMaxResults(10)
                    ->orderBy('p.id', 'DESC')
                    ->getQuery();
	    $Notifications = $NotificationsQuery->getResult();
            
            if ($Task == null){
            	return $this->render('ridwanStyleBundle:Error:error.html.twig', array('message'=>" Task doesn't exists",'Notifications' => $Notifications));
            }
            
            $Comments = $this->getCommentsAction($taskID);
            $Project = $this->getProjectAction($Task->getProject());
            $Manager = $this->getUserAction($Task->getLeader());
            $User = $this->getUserAction($Task->getUser());
            return $this->render('ridwanTaskBundle:Tasks:details.html.twig', array(
                        'Task' => $Task,
                        'Comments' => $Comments,
                        'NewComment' => $CommentForm->createView(),
                        'Manager' => $Manager,
                        'Project' => $Project,
                        'User' => $User,
                        'message' => $request->get('message'),
                        'type' => $request->get('type'),
                        'Notifications' => $Notifications
            ));
        }
        return $this->redirect($this->generateUrl('ridwan_site_login'));
    }

    private function getCommentsAction($taskID) {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT c.id,c.user, c.comment, c.project, c.task, c.timestamp, u.firstname, u.lastname, u.path FROM ridwan\EntityBundle\Entity\User u,ridwan\EntityBundle\Entity\Comments c WHERE  u.id = c.user AND c.task =:taskID ORDER BY c.id')
                ->setParameter('taskID', $taskID);
                

        $comments = $query->getResult();
        return $comments;
    }

    private function getUserAction($userID) {
        $em = $this->getDoctrine()->getManager();
        $UserRepository = $em->getRepository('ridwanEntityBundle:User');
        $manager = $UserRepository->find(array('id' => $userID));
        return $manager;
    }

    private function getProjectAction($projectID) {
        $em = $this->getDoctrine()->getManager();
        $ProjectRepository = $em->getRepository('ridwanEntityBundle:Project');
        $project = $ProjectRepository->find(array('id' => $projectID));
        return $project;
    }

    public function editTaskAction(Request $request, $taskID) {

        $user = $this->authenticateAction();
        if ($user) {
            $access = $user->getAccesslevel();
            if ($access == 'Head' || $access == 'Admin') {
                $em = $this->getDoctrine()->getManager();
                $repository = $em->getRepository('ridwanEntityBundle:Task');
                $task = $repository->find($taskID);
                $NotificationRepository = $em->getRepository('ridwanEntityBundle:Notification');
            $NotificationsQuery = $NotificationRepository->createQueryBuilder('p')
                    ->where('p.userid = :id AND p.seen = 0')
                    ->setParameter('id', $user->getId())
                    ->setMaxResults(10)
                    ->orderBy('p.id', 'DESC')
                    ->getQuery();
	    $Notifications = $NotificationsQuery->getResult();

                $form = $this->createForm(new TaskType(), $task, array(
                    'action' => $this->generateUrl('ridwan_task_edit', array('taskID' => $taskID)),
                    'method' => 'PUT',
                    'attr' => array(
                        'class' => 'form-horizontal center'
                    )
                ));
                $form->handleRequest($request);

                if ($form->isValid()) {
                    $User = $this->getUserAction($task->getUser()->getId())->getFirstname();
                    $task->setLeader($task->getLeader()->getId());
                    $task->setUser($task->getUser()->getId());
                    $task->setProject($task->getProject()->getId());
                    
                    $subscribers = array();
                    $subscribers[] = $task->getLeader()->getId();
                    $subscribers[] = $task->getUser()->getId();
                    
                    $task->setSubscribers($subscribers);
                   
                    try {
                        $em->persist($task);
                        $em->flush();
                    } catch (\Exception $e) {
                       // echo $e;
                        return $this->render('ridwanTaskBundle:Tasks:edit.html.twig', array(
                                    'message' => ' Opz! something went wrong!',
                                    'type' => 'E',
                                    'form' => $form->createView(),
                                    'Notifications' => $Notifications
                        ));
                    }


                    $this->setNotification('Task Details Updated', "Details of your task has been updated. Click the following link to get the latest details.", 1, $task->getUser(), $task->getId(), $task->getProject());


                    return $this->redirect($this->generateUrl('ridwan_task_index', array(
                                        'type' => 'S',
                                        'message' => "succesfully updated new details and notified user")));
                }

                return $this->render('ridwanTaskBundle:Tasks:edit.html.twig', array(
                            'form' => $form->createView(),
                            'Notifications' => $Notifications
                ));
            } else {
                return $this->render('ridwanStyleBundle:Error:permission.html.twig',array(
                	'Notifications' => $Notifications
                ));
            }
        }
        return $this->redirect($this->generateUrl('ridwan_site_login'));
    }

    public function completePageAction($taskID) {
        $user = $this->authenticateAction();
        if ($user) {
            $access = $user->getAccesslevel();
            if ($access == 'Head' || $access == 'Admin') {
                $em = $this->getDoctrine()->getManager();
                $TaskRepository = $em->getRepository('ridwanEntityBundle:Task');
                $Task = $TaskRepository->find($taskID);
                $NotificationRepository = $em->getRepository('ridwanEntityBundle:Notification');
            $NotificationsQuery = $NotificationRepository->createQueryBuilder('p')
                    ->where('p.userid = :id AND p.seen = 0')
                    ->setParameter('id', $user->getId())
                    ->setMaxResults(10)
                    ->orderBy('p.id', 'DESC')
                    ->getQuery();
	    $Notifications = $NotificationsQuery->getResult();
                $User = $this->getUserAction($Task->getUser());
                return $this->render('ridwanTaskBundle:Tasks:complete.html.twig', array(
                            'Task' => $Task,
                            'User' => $User,
                            'Notifications' => $Notifications
                ));
            } else {
                return $this->render('ridwanStyleBundle:Error:permission.html.twig',array(
                	'Notifications' => $Notifications
                ));
            }
        }
        return $this->redirect($this->generateUrl('ridwan_site_login'));
    }

    public function completeTaskAction(Request $request) {
        $user = $this->authenticateAction();
        if ($user) {
            $access = $user->getAccesslevel();
            if ($access == 'Head' || $access == 'Admin') {
                $taskID = $request->get('taskID');
                $em = $this->getDoctrine()->getManager();
                $repository = $em->getRepository('ridwanEntityBundle:Task');
                $task = $repository->find($taskID);
                $task->setEndtimestamp(new \DateTime());
                $task->setCompleted(1);
                $taskRating = $request->get('rating');
                $taskWeight = $task->getWeight();
                $task->setRate($taskRating);
                
                $NotificationRepository = $em->getRepository('ridwanEntityBundle:Notification');
            	$NotificationsQuery = $NotificationRepository->createQueryBuilder('p')
                    ->where('p.userid = :id AND p.seen = 0')
                    ->setParameter('id', $user->getId())
                    ->setMaxResults(10)
                    ->orderBy('p.id', 'DESC')
                    ->getQuery();
	    	$Notifications = $NotificationsQuery->getResult();
                
                $CareerRepository = $em->getRepository('ridwanEntityBundle:Trackreport');
                $userCareer = $CareerRepository->findOneBy(array('user'=>$task->getUser()));
                $currentRating = $userCareer->getOverallrating();
                $totalWeight = $userCareer->getTotalWeight();
                $newRating = (($currentRating * $totalWeight)+($taskRating* $taskWeight))/($totalWeight + $taskWeight);
                
                $userCareer->setOverallrating($newRating);
                $userCareer->setTotalweight($totalWeight + $taskWeight);
                
                $feedbacks = $userCareer->getComments();
                if ($feedbacks == null){
                    $feedbacks = array();                    
                }
                $feedbacks[] = array($task->getLeader(),$request->get('feedback'));
                $userCareer->setComments($feedbacks);
                
                try {
                    $em->persist($userCareer);
                    $em->persist($task);
                    $em->flush();
                } catch (\Exception $e) {
                    //echo $e;
                    return $this->redirect($this->generateUrl('ridwan_task_details', array(
                                        'type' => 'E',
                                        'message' => " opz! somethings went wrong!",
                                        'taskID' => $taskID
                    )));
                }

                $this->setNotification('Task Completed', "Congratulations! You have completed your Task with a Rating of " . $taskRating . "/10.", 3, $task->getUser(), $task->getId(), $task->getProject());


                return $this->redirect($this->generateUrl('ridwan_task_details', array(
                                    'type' => 'S',
                                    'message' => " successfully saved changes and notified user",
                                    'taskID' => $taskID
                )));
            } else {
                return $this->render('ridwanStyleBundle:Error:permission.html.twig',array(
                	'Notifications' => $Notifications
                ));
            }
        }
        return $this->redirect($this->generateUrl('ridwan_site_login'));
    }

    public function newTaskAction(Request $request) {
        $user = $this->authenticateAction();
        if ($user) {
            $access = $user->getAccesslevel();
            $pillar = $user->getPillar();
            $em = $this->getDoctrine()->getManager();
            $NotificationRepository = $em->getRepository('ridwanEntityBundle:Notification');
            $NotificationsQuery = $NotificationRepository->createQueryBuilder('p')
                    ->where('p.userid = :id AND p.seen = 0')
                    ->setParameter('id', $user->getId())
                    ->setMaxResults(10)
                    ->orderBy('p.id', 'DESC')
                    ->getQuery();
	    $Notifications = $NotificationsQuery->getResult();
            if ($access == 'Head' || $access == 'Admin') {
                $task = new Task();
                $form = $this->createForm(new TaskType(), $task, array(
                    'action' => $this->generateUrl('ridwan_task_new'),
                    'attr' => array(
                        'class' => 'form-horizontal center'
                        
                    )
                ));
                $form->handleRequest($request);

                if ($form->isValid()) {
                    $task = $form->getData();
                    
//$task->setEndtimestamp($task->getEndtimestamp()->getTimeStamp());
//$task->setStarttimestamp($task->getStarttimestamp()->getTimeStamp());
                    $User = $task->getUser()->getFirstname();
                    $UserEmail = $task->getUser()->getEmail();
                    $UserName = $task->getUser()->getFirstname();                    
                    $task->setLeader($task->getLeader()->getId());
                    $task->setPillar($task->getUser()->getPillar());
                    $task->setUser($task->getUser()->getId());
                    $task->setProject($task->getProject()->getId());
                    $task->setComments(array());
                    $task->setCompleted(0);
                    $task->setRate(0);
                    
                    $em->persist($task);
                    
           		
                    try {
                        $em->flush();
                    } catch (\Exception $e) {
                       echo $e;
                        return $this->render('ridwanTaskBundle:Tasks:new.html.twig', array(
                                    'message' => ' Opz! something went wrong!',
                                    'type' => 'E',
                                    'form' => $form->createView(),
                                    'Notifications' => $Notifications
                        ));
                    }

                    $repository = $em->getRepository('ridwanEntityBundle:Task');
                    $CareerRepository = $em->getRepository('ridwanEntityBundle:Trackreport');
                    
                    $newTask = $repository->findOneBy(array('name' => $task->getName()));
                    $userCareer = $CareerRepository->findOneBy(array('user'=>$task->getUser()));
                    if ($userCareer == null){
			
			 return $this->render('ridwanTaskBundle:Tasks:new.html.twig', array(
                                    'message' => ' task can only be assigned to Spiriters not CXO or Pillar HEead',
                                    'type' => 'E',
                                    'form' => $form->createView(),
                                    'Notifications' => $Notifications
                        ));                    
                   
                    }
                    $this->setNotification('You have a new Task', "You have been assigned a new task to complete", 2, $newTask->getUser(), $newTask->getId(), $newTask->getProject());
                    $this->sendEmailAction($UserEmail, $UserName, $newTask->getId());
                    $Project = $this->getProjectAction($newTask->getProject());
                    $members = $Project->getMembers();
                    $isThere = false;
                    if ($members != null){
                    foreach ($members as $member) {
                        if ($member == $newTask->getUser()) {
                            $isThere = true;
                        }
                    }

                    if (!$isThere) {
                        $members[] = $newTask->getUser();
                    }
                    }
                    else{
                        $members = array();
                        $members[] = $newTask->getUser();
                    }
                    
                    
                    $userTasks = $userCareer->getTasks();
                    $userTasks[] = $newTask->getId();
                    $userCareer->setTasks($userTasks);
                    
                    $userProjects = $userCareer->getProjects();
                    $userProjects[] = $newTask->getProject();
                    $userCareer->setProjects($userProjects);

                    $tasks = $Project->getTasks();
                    
                    if ($tasks == null){
                        $tasks = array();                    
                    }
                    $tasks[] = $newTask->getId();
                    
                    
                    $Project->setMembers($members);
                    $Project->setTasks($tasks);
                    try {
                        $em->persist($userCareer);
                        $em->persist($Project);
                        $em->flush();
                    } catch (\Exception $e) {
                        //echo $e;
                        return $this->render('ridwanTaskBundle:Tasks:new.html.twig', array(
                                    'message' => ' Opz! something went wrong!',
                                    'type' => 'E',
                                    'form' => $form->createView(),
                                    'Notifications' => $Notifications
                        ));
                    }

                    return $this->redirect($this->generateUrl('ridwan_task_index', array(
                                        'type' => 'S',
                                        'message' => "succesfully assigned new task and notified user")));
                }

                return $this->render('ridwanTaskBundle:Tasks:new.html.twig', array(
                            'form' => $form->createView(),
                            'Notifications' => $Notifications
                ));
            } else {
                return $this->render('ridwanStyleBundle:Error:permission.html.twig',array(
                            'Notifications' => $Notifications
                ));
            }
        }
        return $this->redirect($this->generateUrl('ridwan_site_login'));
    }

    public function deleteTaskAction(Request $request) {
        $user = $this->authenticateAction();
        if ($user) {
            $access = $user->getAccesslevel();
            
            $em = $this->getDoctrine()->getManager();
	    $NotificationRepository = $em->getRepository('ridwanEntityBundle:Notification');
            $NotificationsQuery = $NotificationRepository->createQueryBuilder('p')
                    ->where('p.userid = :id AND p.seen = 0')
                    ->setParameter('id', $user->getId())
                    ->setMaxResults(10)
                    ->orderBy('p.id', 'DESC')
                    ->getQuery();
	    $Notifications = $NotificationsQuery->getResult();
            if ($access == 'Head' || $access == 'Admin') {
                $id = $request->get('id');
                $Task = $em->getRepository('ridwanEntityBundle:Task')->find($id);		
		$Comments = $em->getRepository('ridwanEntityBundle:Comments')->findBy(array("task"=>$id));
		if ($Comments != null){
			foreach ($Comments as $comment){
				 $em->remove($comment);
			}
		}
		
		$Notifications = $em->getRepository('ridwanEntityBundle:Notification')->findBy(array("task"=>$id));
		
		if ($Notifications != null){
			foreach ($Notifications as $notification){
			 	$em->remove($notification);
			}
		}
                if (!$Task) {
                    return $this->redirect($this->generateUrl('ridwan_task_index', array(
                                        'type' => 'E',
                                        'message' => " opz! could not find task")));
                }

                try {
               
                    $em->remove($Task);
                    $em->flush();
                } catch (\Exception $e) {
                    return $this->redirect($this->generateUrl('ridwan_task_index', array(
                                        'type' => 'E',
                                        'message' => " opz! could not delete task")));
                }
                
                
                
                

                return $this->redirect($this->generateUrl('ridwan_task_index', array(
                                    'type' => 'S',
                                    'message' => " successfully deleted the task")));
            } else {
                return $this->render('ridwanStyleBundle:Error:permission.html.twig',array(
                            'Notifications' => $Notifications
                ));
            }
        }
        return $this->redirect($this->generateUrl('ridwan_site_login'));
    }

    private function setNotification($heading, $message, $type, $user, $task, $project) {
        $em = $this->getDoctrine()->getManager();
        $notification = new Notification();
        $notification->setTask($task);
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
    
    private function sendEmailAction($email, $name, $taskID) {

      
	
        $link = "http://www.volma.ridwan.com" .$this->generateUrl('ridwan_task_details', array('taskID'=>$taskID));
       

        // echo "Got Here ".$username." ".$firstname;
        $message = \Swift_Message::newInstance()
                ->setSubject('New Task Assigned')
                ->setFrom('ridwan@gmail.com')
                ->setTo($email)
                ->setBcc('rshariffdeen@gmail.com')
                ->setBody(
                $this->renderView(
                        'ridwanNotificationBundle:Task:notification.html.twig', array('name' => $name, 'link' => $link)
                ), 'text/html'
                )
        ;
        $this->get('mailer')->send($message);
    }
    
    public function notificationAction($taskID,$notificationID){
    	$user = $this->authenticateAction();
    	if($user){
    		$em = $this->getDoctrine()->getManager();
        	$Repository = $em->getRepository('ridwanEntityBundle:Notification');
        	$notification = $Repository->find($notificationID);
        	$notification->setSeen(1);
        	$em->persist($notification);
        	$em->flush();
        
        	return $this->redirect($this->generateUrl('ridwan_task_details',array('taskID'=>$taskID)));
    	}
    }

}