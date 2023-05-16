<?php

namespace Untek\Pack\Core\Infrastructure;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Untek\Core\Kernel\Bundle\BaseBundle;

class CorePackBundle extends BaseBundle
{
    public function getName(): string
    {
        return 'core-pack';
    }

    public function build(ContainerBuilder $containerBuilder)
    {
        $this->importServices($containerBuilder,__DIR__ . '/../../../../../vendor/untek-core/instance/src/Resources/config/services/argument-resolver.php');
        $this->importServices($containerBuilder,__DIR__ . '/../../../../../vendor/untek-core/event-dispatcher/src/Resources/config/services/event-dispatcher.php');
        $this->importServices($containerBuilder,__DIR__ . '/../../../../../vendor/untek-core/kernel/src/Resources/config/services/kernel.php');
    }
}
