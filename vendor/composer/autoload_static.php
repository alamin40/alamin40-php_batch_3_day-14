<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbcc75893a9088385157fc257cd48956b
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbcc75893a9088385157fc257cd48956b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbcc75893a9088385157fc257cd48956b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbcc75893a9088385157fc257cd48956b::$classMap;

        }, null, ClassLoader::class);
    }
}
