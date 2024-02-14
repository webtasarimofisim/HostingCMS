<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9ab6bea254e6a2248dcf7658f8d16d01
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Process\\' => 26,
        ),
        'L' => 
        array (
            'League\\Flysystem\\' => 17,
        ),
        'B' => 
        array (
            'BackupManager\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'League\\Flysystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/flysystem/src',
        ),
        'BackupManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/backup-manager/backup-manager/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9ab6bea254e6a2248dcf7658f8d16d01::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9ab6bea254e6a2248dcf7658f8d16d01::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}