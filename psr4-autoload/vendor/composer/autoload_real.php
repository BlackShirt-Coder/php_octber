<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit88cac7f918a4d62ac2dbfc35a39b282a
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

        spl_autoload_register(array('ComposerAutoloaderInit88cac7f918a4d62ac2dbfc35a39b282a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit88cac7f918a4d62ac2dbfc35a39b282a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit88cac7f918a4d62ac2dbfc35a39b282a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
