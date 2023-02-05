<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit00edfcedda76f77dc1dc9c329c41a15e
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit00edfcedda76f77dc1dc9c329c41a15e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit00edfcedda76f77dc1dc9c329c41a15e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit00edfcedda76f77dc1dc9c329c41a15e::$classMap;

        }, null, ClassLoader::class);
    }
}
