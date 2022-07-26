<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb13fc5e7eb9caafd265957eacac1634f
{
    public static $prefixLengthsPsr4 = array (
        'o' => 
        array (
            'oaworld\\collect\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'oaworld\\collect\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb13fc5e7eb9caafd265957eacac1634f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb13fc5e7eb9caafd265957eacac1634f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb13fc5e7eb9caafd265957eacac1634f::$classMap;

        }, null, ClassLoader::class);
    }
}
