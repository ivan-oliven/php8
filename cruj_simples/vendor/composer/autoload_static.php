<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit964a7ee835feb7d9011d52f7220487d6
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit964a7ee835feb7d9011d52f7220487d6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit964a7ee835feb7d9011d52f7220487d6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit964a7ee835feb7d9011d52f7220487d6::$classMap;

        }, null, ClassLoader::class);
    }
}
