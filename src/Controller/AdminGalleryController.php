<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdminGalleryController extends Controller
{
    /**
     * @Route("/admin/gallery", name="galleryAdmin")
     */
    public function index()
    {
        // replace this line with your own code!
        return $this->render('admin/gallery/admin_gallery.html.twig', [ 'path' => str_replace($this->getParameter('kernel.project_dir').'/', '', __FILE__) ]);
    }

}