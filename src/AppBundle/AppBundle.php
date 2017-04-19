<?php

namespace AppBundle;

use AppBundle\DependencyInjection\Compiler\ShortcodeCompilerPass;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class AppBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new ShortcodeCompilerPass());
    }
}
