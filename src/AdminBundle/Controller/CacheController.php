<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;
use AppBundle\Entity\Page;

class CacheController extends Controller
{
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();

        $food = new Page();
        $food->setName('Food');

        $fruits = new Page();
        $fruits->setName('Fruits');
        $fruits->setParent($food);

        $vegetables = new Page();
        $vegetables->setName('Vegetables');
        $vegetables->setParent($food);

        $carrots = new Page();
        $carrots->setName('Carrots');
        $carrots->setParent($vegetables);

        $em->persist($food);
        $em->persist($fruits);
        $em->persist($vegetables);
        $em->persist($carrots);
        $em->flush();

        return $this->render('AdminBundle:Cache:index.html.twig');
    }

    public function clearAction()
    {
        $filesystem   = $this->container->get('filesystem');
        $realCacheDir = $this->container->getParameter('kernel.cache_dir');
        $this->container->get('cache_clearer')->clear($realCacheDir);
        $filesystem->remove($realCacheDir);

        $this->get('session')->getFlashBag()->add('success', 'Pamięć podręczna została wyczyszczona');

        return $this->redirect($this->generateUrl('admin_cache'));
    }
}
