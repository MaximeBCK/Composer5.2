<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit69fa5b5f87dad3e93cc7a4945878fbd3
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

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit69fa5b5f87dad3e93cc7a4945878fbd3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit69fa5b5f87dad3e93cc7a4945878fbd3::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit69fa5b5f87dad3e93cc7a4945878fbd3::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit69fa5b5f87dad3e93cc7a4945878fbd3::$classMap;

        }, null, ClassLoader::class);
    }
}
