<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2bd61e44979d19ef345d0c2643c4ec68
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Skvrd\\ProxyAPI\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Skvrd\\ProxyAPI\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2bd61e44979d19ef345d0c2643c4ec68::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2bd61e44979d19ef345d0c2643c4ec68::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
