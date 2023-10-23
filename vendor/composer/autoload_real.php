<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit0710fd3d36e2c06f2ee9e05eed2edeb8
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit0710fd3d36e2c06f2ee9e05eed2edeb8', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit0710fd3d36e2c06f2ee9e05eed2edeb8', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit0710fd3d36e2c06f2ee9e05eed2edeb8::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
