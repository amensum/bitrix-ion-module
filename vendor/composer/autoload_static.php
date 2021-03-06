<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc2f1ccd9bcfcce17f9f01e02c1a89c90
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '9f7f3f9b1f82484e76bcd07b985a2d2f' => __DIR__ . '/..' . '/symfony/var-dumper/Symfony/Component/VarDumper/Resources/functions/dump.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Symfony\\Component\\VarDumper\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/var-dumper',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc2f1ccd9bcfcce17f9f01e02c1a89c90::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc2f1ccd9bcfcce17f9f01e02c1a89c90::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc2f1ccd9bcfcce17f9f01e02c1a89c90::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
