<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdb94a11adfc6b4fa6eadc70c1d74a1dd
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vinicius8706\\CursoPdo\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vinicius8706\\CursoPdo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdb94a11adfc6b4fa6eadc70c1d74a1dd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdb94a11adfc6b4fa6eadc70c1d74a1dd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdb94a11adfc6b4fa6eadc70c1d74a1dd::$classMap;

        }, null, ClassLoader::class);
    }
}
