<?php
// src/Controller/BlogController.php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog_index")
     */

    public function index()
    {
        return $this->render('blog/index.html.twig', [
            'owner' => 'David',
        ]);
    }
    /**
     *
     * @Route("/blog/list/{page}",
     *     requirements={"page"="\d+"},
     *     defaults={"page"=1},
     *     name="blog_list"
     * )
     */
    public function list($page)
    {
        return $this->render('blog/list.html.twig', ['page' => $page]);
    }
    /**
     *
     * @Route("/blog/show/{slug}",
     *     requirements={"slug"="([a-z\/0-9\-])+"},
     *     defaults={"slug"="article-sans-titre"},
     *     name="blog_list"
     * )
     */
    public function show($slug)
    {
        return $this->render('blog/show.html.twig', ['slug' => ucwords(str_replace('-', ' ', $slug))]);
    }
}