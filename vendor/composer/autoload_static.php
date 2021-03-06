<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite4f88fd08598b77b7b573359704dd6c7
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
            'Timber\\' => 7,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
        'B' => 
        array (
            'Blendid\\Starter\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Timber\\' => 
        array (
            0 => __DIR__ . '/..' . '/timber/timber/lib',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
        'Blendid\\Starter\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc/Blendid',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/asm89/twig-cache-extension/lib',
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
        'R' => 
        array (
            'Routes' => 
            array (
                0 => __DIR__ . '/..' . '/upstatement/routes',
            ),
        ),
    );

    public static $classMap = array (
        'AltoRouter' => __DIR__ . '/..' . '/altorouter/altorouter/AltoRouter.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite4f88fd08598b77b7b573359704dd6c7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite4f88fd08598b77b7b573359704dd6c7::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInite4f88fd08598b77b7b573359704dd6c7::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite4f88fd08598b77b7b573359704dd6c7::$prefixesPsr0;
            $loader->classMap = ComposerStaticInite4f88fd08598b77b7b573359704dd6c7::$classMap;

        }, null, ClassLoader::class);
    }
}
