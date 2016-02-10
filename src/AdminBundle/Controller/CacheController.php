<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;

class CacheController extends Controller
{
    public function indexAction()
    {
        $kernel = $this->container->get('kernel');
        $command = new CacheClearCommand('cache:clear');
        $command->setContainer($this->container);
        $input = new ArrayInput(array());
        $output = new NullOutput();
        $resultCode = $command->run($input, $output);
        
        return $this->render('AdminBundle:Default:index.html.twig');
    }
    
}
