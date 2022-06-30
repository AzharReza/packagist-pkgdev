<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit460e8a2976d58944e4c742221ae0231b
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cas\\Pkgdev\\' => 11,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cas\\Pkgdev\\' => 
        array (
            0 => __DIR__ . '/../..' . '/packages/cas/pkgdev/src',
        ),
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit460e8a2976d58944e4c742221ae0231b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit460e8a2976d58944e4c742221ae0231b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit460e8a2976d58944e4c742221ae0231b::$classMap;

        }, null, ClassLoader::class);
    }
}
