<?php

namespace AppBundle\Controller\Backend;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;
use AppBundle\Entity\Page;

class CacheController extends Controller
{
    public function indexAction()
    {
        return $this->render('backend/Cache/index.html.twig');
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
