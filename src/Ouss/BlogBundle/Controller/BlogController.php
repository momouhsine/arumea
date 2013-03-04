<?php
 

namespace Ouss\BlogBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
 
class BlogController extends Controller
{
  public function indexAction()
  {
    return $this->render('OussBlogBundle:Blog:index.html.twig');
  }

   public function voirAction($id)
  {
    // $id vaut 5 si l'on a appelé l'URL /blog/article/5
         
    // Ici, on récupèrera depuis la base de données l'article correspondant à l'id $id
    // Puis on passera l'article à la vue pour qu'elle puisse l'afficher
 
    return new Response("Affichage de l'article d'id : ".$id.".");
  }
  // On récupère tous les paramètres en arguments de la méthode
  public function voirSlugAction($slug, $annee, $format)
  {
    // Ici le contenu de la méthode
    return new Response("On pourrait afficher l'article correspondant au slug '".$slug."', créé en ".$annee." et au format ".$format.".");
}
}
