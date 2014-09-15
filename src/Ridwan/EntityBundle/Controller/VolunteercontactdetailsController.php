<?php

namespace Ridwan\EntityBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Ridwan\EntityBundle\Entity\Volunteercontactdetails;
use Ridwan\EntityBundle\Form\VolunteercontactdetailsType;

/**
 * Volunteercontactdetails controller.
 *
 * @Route("/volunteercontactdetails")
 */
class VolunteercontactdetailsController extends Controller
{

    /**
     * Lists all Volunteercontactdetails entities.
     *
     * @Route("/", name="volunteercontactdetails")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('RidwanEntityBundle:Volunteercontactdetails')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Volunteercontactdetails entity.
     *
     * @Route("/", name="volunteercontactdetails_create")
     * @Method("POST")
     * @Template("RidwanEntityBundle:Volunteercontactdetails:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Volunteercontactdetails();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('volunteercontactdetails_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Volunteercontactdetails entity.
     *
     * @param Volunteercontactdetails $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Volunteercontactdetails $entity)
    {
        $form = $this->createForm(new VolunteercontactdetailsType(), $entity, array(
            'action' => $this->generateUrl('volunteercontactdetails_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Volunteercontactdetails entity.
     *
     * @Route("/new", name="volunteercontactdetails_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Volunteercontactdetails();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Volunteercontactdetails entity.
     *
     * @Route("/{id}", name="volunteercontactdetails_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RidwanEntityBundle:Volunteercontactdetails')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Volunteercontactdetails entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Volunteercontactdetails entity.
     *
     * @Route("/{id}/edit", name="volunteercontactdetails_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RidwanEntityBundle:Volunteercontactdetails')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Volunteercontactdetails entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RidwanEntityBundle:Volunteercontactdetails:edit.html.twig',array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Volunteercontactdetails entity.
    *
    * @param Volunteercontactdetails $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Volunteercontactdetails $entity)
    {
        $form = $this->createForm(new VolunteercontactdetailsType(), $entity, array(
            'action' => $this->generateUrl('ridwan_volunteercontact_update', array('id' => $entity->getId())),
            'method' => 'PUT',
            'attr' => array( 'class' => 'form-horizontal center')
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Volunteercontactdetails entity.
     *
     * @Route("/{id}", name="volunteercontactdetails_update")
     * @Method("PUT")
     * @Template("RidwanEntityBundle:Volunteercontactdetails:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RidwanEntityBundle:Volunteercontactdetails')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Volunteercontactdetails entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ridwan_site_home', array('type' => 'S', 'message' => 'successfully updated your information')));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Volunteercontactdetails entity.
     *
     * @Route("/{id}", name="volunteercontactdetails_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('RidwanEntityBundle:Volunteercontactdetails')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Volunteercontactdetails entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('volunteercontactdetails'));
    }

    /**
     * Creates a form to delete a Volunteercontactdetails entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ridwan_volunteercontact_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
