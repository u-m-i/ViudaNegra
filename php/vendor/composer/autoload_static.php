<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7282152fe86a6b2a34efd670770c16c7
{
    public static $files = array (
        '9c5c5b634e7df0b41994d679267cc9a2' => __DIR__ . '/../..' . '/scr/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'crud\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'crud\\' => 
        array (
            0 => __DIR__ . '/../..' . '/scr',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7282152fe86a6b2a34efd670770c16c7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7282152fe86a6b2a34efd670770c16c7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7282152fe86a6b2a34efd670770c16c7::$classMap;

        }, null, ClassLoader::class);
    }
}
