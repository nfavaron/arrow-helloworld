<?php

namespace Application\Service;

use Arrow\Config\Compiler\Compiler;
use Arrow\Config\Compiler\Strategy\Unique;
use Arrow\Config\Compiler\Strategy\PerModule;
use Arrow\Config\Compiler\Strategy\Merge;

/**
 * Class CompilerFactory
 *
 * @package Application\Service
 */
class CompilerFactory
{

    /**
     * @return Compiler
     */
    static public function create()
    {

        $compiler     = new Compiler();
        $routes       = new Unique('routes');
        $services     = new Unique('services');
        $initializers = new Unique('initializers');
        $settings     = new PerModule('settings');
        $observers    = new Merge('observers');

        $compiler
            ->addStrategy($routes)
            ->addStrategy($services)
            ->addStrategy($initializers)
            ->addStrategy($settings)
            ->addStrategy($observers);

        return $compiler;

    }

}