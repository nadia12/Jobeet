<?php

namespace Ibw\KoperasiBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ibw\KoperasiBundle\Entity\Job;
use Ibw\KoperasiBundle\Form\JobType;

/**
 * Job controller.
 *
 */
class JobController extends Controller
{

    /**
     * Lists all Job entities.
     *
     */
    public function indexAction()
    {
    $em = $this->getDoctrine()->getManager();
 
    /*---------------------------------EDIT 1---------------------------------------------*/
    //------------------------Tampilkan semua list yang ada di dalam database 
    //$entities = $em->getRepository('IbwKoperasiBundle:Job')->findAll();

    /*---------------------------------EDIT 2---------------------------------------------*/
    //--------------------------------Tampilkan yang kurang dari 30 hari
    //$query = $em->createQuery(
    //    'SELECT j FROM IbwKoperasiBundle:Job j WHERE j.created_at > :date'
    //)->setParameter('date', date('Y-m-d H:i:s', time() - 86400 * 30));
    //$entities = $query->getResult();

    /*---------------------------------EDIT 3---------------------------------------------*/
    //--------------------------------Tampilkan yang Belum Expired

     /*$query = $em->createQuery(
            'SELECT j FROM IbwKoperasiBundle:Job j WHERE j.expires_at > :date'
    )->setParameter('date', date('Y-m-d H:i:s', time()));
        $entities = $query->getResult();*/

    /*--------------------------------EDIT 4------------------------------*/
    //-------------------------------Tampilkan List yang ACTIVE
    // $entities = $em->getRepository('IbwKoperasiBundle:Job')->getActiveJobs();
  
    /*-------------------------------EDIT 5------------------------------*/
    // -----------------------------Tampilkan Job sesuai Kategori
    $categories = $em->getRepository('IbwKoperasiBundle:Category')->getWithJobs();
 

      foreach($categories as $category) {

    // Belum dilimit hasinya    
    //$category->setActiveJobs($em->getRepository('IbwKoperasiBundle:Job')->getActiveJobs($category->getId()));

    /*-----------------------------EDIT 6---------------------------------------*/
    // --------------------------  limit hasilnya tampilkan 10 list-----------
    // $category->setActiveJobs($em->getRepository('IbwKoperasiBundle:Job')->getActiveJobs($category->getId(), 10));

    /*------------------EDIT 7---------------------------------------------------*/
    //------------------- Limit tampilan, panggil parameter dari app/config/config.yml..........................
   $category->setActiveJobs($em->getRepository('IbwKoperasiBundle:Job')->getActiveJobs($category->getId(), $this->container->getParameter('max_jobs_on_homepage')));

   // controller More JObs
    $category->setMoreJobs($em->getRepository('IbwKoperasiBundle:Job')->countActiveJobs($category->getId()) - $this->container->getParameter('max_jobs_on_homepage'));
        }

  
    // Render view untuk home
    return $this->render('IbwKoperasiBundle:Job:index.html.twig', array(
       // 'entities' => $entities
         'categories' => $categories
    ));
    }

    /**
     * Creates a new Job entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Job();
        $form = $this->createForm(new JobType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            //--------------Tambah Logo properti
            /*$entity->file->move(__DIR__.'/../../../../web/uploads/jobs', $entity->file->getClientOriginalName());
            $entity->setLogo($entity->file->getClientOriginalName());*/

            $em->persist($entity);
            $em->flush();

            //return $this->redirect($this->generateUrl('ibw_job_show', array('id' => $entity->getId())));
         return $this->redirect($this->generateUrl('ibw_job_show', array(
            'company' => $entity->getCompanySlug(),
            'location' => $entity->getLocationSlug(),
            'id' => $entity->getId(),
            'position' => $entity->getPositionSlug()
        )));
        }

        return $this->render('IbwKoperasiBundle:Job:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Job entity.
    *
    * @param Job $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Job $entity)
    {
        $form = $this->createForm(new JobType(), $entity, array(
            'action' => $this->generateUrl('ibw_job_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Job entity.
     *
     */
    public function newAction()
    {
        $entity = new Job();
        $entity->setType('full-time');
        $form   = $this->createCreateForm($entity);

        return $this->render('IbwKoperasiBundle:Job:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Job entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        //$entity = $em->getRepository('IbwKoperasiBundle:Job')->find($id);

// ---------------------Arahkan ke JObRepository
        $entity = $em->getRepository('IbwKoperasiBundle:Job')->getActiveJob($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Job entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('IbwKoperasiBundle:Job:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Job entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IbwKoperasiBundle:Job')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Job entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('IbwKoperasiBundle:Job:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Job entity.
    *
    * @param Job $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Job $entity)
    {
        $form = $this->createForm(new JobType(), $entity, array(
            'action' => $this->generateUrl('ibw_job_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Job entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IbwKoperasiBundle:Job')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Job entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ibw_job_edit', array('id' => $id)));
        }

        return $this->render('IbwKoperasiBundle:Job:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Job entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('IbwKoperasiBundle:Job')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Job entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ibw_job'));
    }

    /**
     * Creates a form to delete a Job entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ibw_job_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
