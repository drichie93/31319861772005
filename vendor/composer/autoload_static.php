<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4087a1c75a4174338d32fd33e71d6312
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

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/app',
    );

    public static $classMap = array (
        'App\\model\\m_profile' => __DIR__ . '/../..' . '/app/model/m_profile.php',
        'app\\controller\\c_index' => __DIR__ . '/../..' . '/app/controller/c_index.php',
        'app\\controller\\c_login' => __DIR__ . '/../..' . '/app/controller/c_login.php',
        'app\\controller\\c_profile' => __DIR__ . '/../..' . '/app/controller/c_profile.php',
        'app\\controller\\c_template' => __DIR__ . '/../..' . '/app/controller/c_template.php',
        'app\\model\\m_database' => __DIR__ . '/../..' . '/app/model/m_database.php',
        'app\\model\\m_login' => __DIR__ . '/../..' . '/app/model/m_login.php',
        'app\\model\\m_newEmployee' => __DIR__ . '/../..' . '/app/model/m_newEmployee.php',
        'app\\model\\m_task' => __DIR__ . '/../..' . '/app/model/m_task.php',
        'c_newEmployee' => __DIR__ . '/../..' . '/app/controller/c_newEmployee.php',
        'c_task' => __DIR__ . '/../..' . '/app/controller/c_task.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4087a1c75a4174338d32fd33e71d6312::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4087a1c75a4174338d32fd33e71d6312::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit4087a1c75a4174338d32fd33e71d6312::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit4087a1c75a4174338d32fd33e71d6312::$classMap;

        }, null, ClassLoader::class);
    }
}
