<?php

namespace ContainerObDutTS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMakeCrudControllerCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.EasyCorp\Bundle\EasyAdminBundle\Command\MakeCrudControllerCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeCrudControllerCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('make:admin:crud', [], 'Creates a new EasyAdmin CRUD controller class', false, #[\Closure(name: 'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeCrudControllerCommand')] fn (): \EasyCorp\Bundle\EasyAdminBundle\Command\MakeCrudControllerCommand => ($container->services['EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeCrudControllerCommand'] ?? $container->load('getMakeCrudControllerCommandService')));
    }
}
