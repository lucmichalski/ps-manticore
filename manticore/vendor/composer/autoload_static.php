<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit395c6f27bcf17ade37614fc921cb7d37
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Manticoresearch\\' => 16,
        ),
        'E' => 
        array (
            'Evolutive\\Manticore\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Manticoresearch\\' => 
        array (
            0 => __DIR__ . '/..' . '/manticoresoftware/manticoresearch-php/src/Manticoresearch',
        ),
        'Evolutive\\Manticore\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit395c6f27bcf17ade37614fc921cb7d37::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit395c6f27bcf17ade37614fc921cb7d37::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit395c6f27bcf17ade37614fc921cb7d37::$classMap;

        }, null, ClassLoader::class);
    }
}
