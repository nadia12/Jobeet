<?php

namespace Ibw\KoperasiBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ibw\KoperasiBundle\Entity\Category;
 
/**
* Category controller
*
*/
class CategoryController extends Controller
{
 
public function showAction($slug, $page)
{
    $em = $this->getDoctrine()->getManager();
 
    $category = $em->getRepository('IbwKoperasiBundle:Category')->findOneBySlug($slug);
 
  /*  if (!$category) {
        throw $this->createNotFoundException('Unable to find Category entity.');
    }
 
    $category->setActiveJobs($em->getRepository('IbwKoperasiBundle:Job')->getActiveJobs($category->getId()));
 
    return $this->render('IbwKoperasiBundle:Category:show.html.twig', array(
        'category' => $category,
    ));
}*/



  if (!$category) {
        throw $this->createNotFoundException('Unable to find Category entity.');
    }
 
    $total_jobs = $em->getRepository('IbwKoperasiBundle:Job')->countActiveJobs($category->getId());
    $jobs_per_page = $this->container->getParameter('max_jobs_on_category');
    $last_page = ceil($total_jobs / $jobs_per_page);
    $previous_page = $page > 1 ? $page - 1 : 1;
    $next_page = $page < $last_page ? $page + 1 : $last_page;
    $category->setActiveJobs($em->getRepository('IbwKoperasiBundle:Job')->getActiveJobs($category->getId(), $jobs_per_page, ($page - 1) * $jobs_per_page));
 
    return $this->render('IbwKoperasiBundle:Category:show.html.twig', array(
        'category' => $category,
        'last_page' => $last_page,
        'previous_page' => $previous_page,
        'current_page' => $page,
        'next_page' => $next_page,
        'total_jobs' => $total_jobs
    ));
	}
}