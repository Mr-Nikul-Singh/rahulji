<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1bae9aebfc36f39725c8f0adc8c9343b
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Facebook\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1bae9aebfc36f39725c8f0adc8c9343b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1bae9aebfc36f39725c8f0adc8c9343b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1bae9aebfc36f39725c8f0adc8c9343b::$classMap;

        }, null, ClassLoader::class);
    }
}