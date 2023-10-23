<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0710fd3d36e2c06f2ee9e05eed2edeb8
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Admin\\LaraAuto\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Admin\\LaraAuto\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0710fd3d36e2c06f2ee9e05eed2edeb8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0710fd3d36e2c06f2ee9e05eed2edeb8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0710fd3d36e2c06f2ee9e05eed2edeb8::$classMap;

        }, null, ClassLoader::class);
    }
}
