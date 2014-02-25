<?php

namespace Verschoof\TransipApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('transip_api');

        $rootNode
            ->children()
                ->scalarNode('login')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
                ->scalarNode('private_key')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
                ->scalarNode('end_point')
                    ->defaultValue('api.transip.nl')
                    ->cannotBeEmpty()
                ->end()
                ->scalarNode('mode')
                    ->defaultValue('readwrote')
                    ->cannotBeEmpty()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
