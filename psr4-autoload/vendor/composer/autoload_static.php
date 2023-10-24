<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit88cac7f918a4d62ac2dbfc35a39b282a
{
    public static $classMap = array (
        'Best' => __DIR__ . '/../..' . '/app/controller/sub/Best.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'End' => __DIR__ . '/../..' . '/app/middleware/End.php',
        'Helper' => __DIR__ . '/../..' . '/app/controller/sub/Helper.php',
        'Home' => __DIR__ . '/../..' . '/app/controller/Home.php',
        'Start' => __DIR__ . '/../..' . '/app/middleware/Start.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit88cac7f918a4d62ac2dbfc35a39b282a::$classMap;

        }, null, ClassLoader::class);
    }
}
