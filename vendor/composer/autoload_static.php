<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit60431d1d6c552255f21d083425bba14d
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'ishop\\' => 6,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ishop\\' => 
        array (
            0 => __DIR__ . '/..' . '/ishop',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit60431d1d6c552255f21d083425bba14d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit60431d1d6c552255f21d083425bba14d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit60431d1d6c552255f21d083425bba14d::$classMap;

        }, null, ClassLoader::class);
    }
}
