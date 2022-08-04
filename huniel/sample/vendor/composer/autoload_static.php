<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8fb114dd53c2a1ff20ac71ef2337244a
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Trutr\\Sample\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Trutr\\Sample\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8fb114dd53c2a1ff20ac71ef2337244a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8fb114dd53c2a1ff20ac71ef2337244a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8fb114dd53c2a1ff20ac71ef2337244a::$classMap;

        }, null, ClassLoader::class);
    }
}