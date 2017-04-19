<?php
/**
 * Created by PhpStorm.
 * User: Damian
 * Date: 2017-04-01
 * Time: 13:22
 */

namespace AppBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder as CoreContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Reference;

class ShortcodeCompilerPass implements CompilerPassInterface
{
    public function process(CoreContainerBuilder $container)
    {
        if (!$container->hasDefinition('app.shortcode_chain')) {
            return;
        }
        $definition = $container->getDefinition(
            'app.shortcode_chain'
        );
        $taggedServices = $container->findTaggedServiceIds(
            'app.shortcode'
        );

        foreach ($taggedServices as $id => $attributes) {
            $definition->addMethodCall(
                'addShortcode',
                array(new Reference($id))
            );
        }
    }
}