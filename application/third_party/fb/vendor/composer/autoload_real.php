<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit1bae9aebfc36f39725c8f0adc8c9343b
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit1bae9aebfc36f39725c8f0adc8c9343b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit1bae9aebfc36f39725c8f0adc8c9343b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit1bae9aebfc36f39725c8f0adc8c9343b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
