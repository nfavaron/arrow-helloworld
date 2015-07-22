<?php

    // Define app root path
    define('APP_ROOT_PATH', realpath(__DIR__ . DIRECTORY_SEPARATOR . '..'));

    // Composer autoloader
    require APP_ROOT_PATH.'/vendor/autoload.php';

    // Server settings
    require APP_ROOT_PATH . '/config/server.php';

    // Application config
    $config = require APP_ROOT_PATH.'/cache/config.php';

    /**
     * Instantiate service locator
     *
     * @var \Arrow\Service\Locator\ServiceLocatorInterface $serviceLocator
     */
    $serviceLocator = \Application\Service\ServiceLocatorFactory::create($config);

    /**
     * Set config manager
     *
     * @var \Arrow\Service\Locator\ServiceLocatorInterface $serviceLocator
     */
    $serviceLocator
        ->get('config-manager')
        ->setConfig($config);

    /**
     * Observer manager
     */
    $serviceLocator->setObserverManager($serviceLocator->get('observer-manager'));

    /**
     * Runs the application
     *
     * @var \Arrow\Application\ApplicationInterface $application
     */
    $serviceLocator
        ->get('application')
        ->run();
