<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4e3e8272c5fab3012eeeb4d290bd5ef5
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Maxmoro\\PhpFinish\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Maxmoro\\PhpFinish\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4e3e8272c5fab3012eeeb4d290bd5ef5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4e3e8272c5fab3012eeeb4d290bd5ef5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4e3e8272c5fab3012eeeb4d290bd5ef5::$classMap;

        }, null, ClassLoader::class);
    }
}
