<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd50d9e968d1f539d168769536c326562
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Catenis\WP\Blocks\Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Catenis\WP\Blocks\Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitd50d9e968d1f539d168769536c326562', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Catenis\WP\Blocks\Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd50d9e968d1f539d168769536c326562', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Catenis\WP\Blocks\Composer\Autoload\ComposerStaticInitd50d9e968d1f539d168769536c326562::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
