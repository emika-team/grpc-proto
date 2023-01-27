<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3ee04e82292596b6470117c90a80f904
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'EmikaTeam\\PhpProto\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'EmikaTeam\\PhpProto\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3ee04e82292596b6470117c90a80f904::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3ee04e82292596b6470117c90a80f904::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3ee04e82292596b6470117c90a80f904::$classMap;

        }, null, ClassLoader::class);
    }
}