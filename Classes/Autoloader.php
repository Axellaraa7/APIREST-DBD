<?php
class Autoloader{
  public static function loader(){
    spl_autoload_register(function ($class) {
      include_once $class.".php";
    });
  }
}
?>