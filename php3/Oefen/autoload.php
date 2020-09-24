    <?php
    //autoloader zo dat je niet veel includes hoeft tegebruiken.
    function my_autoloader($class) {
        include 'classes/' . $class . '.class.php';
    }

    spl_autoload_register('my_autoloader');

    spl_autoload_register(function ($class) {
        include 'classes/' . $class . '.class.php';
    });

     ?>
