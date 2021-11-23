<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitea5402b9f57d1f1483560fb64e5ec812
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MyApp\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MyApp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'MyApp\\Controllers\\Controller' => __DIR__ . '/../..' . '/src/Controllers/Controller.php',
        'MyApp\\View\\View' => __DIR__ . '/../..' . '/src/View/View.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitea5402b9f57d1f1483560fb64e5ec812::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitea5402b9f57d1f1483560fb64e5ec812::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitea5402b9f57d1f1483560fb64e5ec812::$classMap;

        }, null, ClassLoader::class);
    }
}