<?php
class Input
{
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        return isset($_REQUEST[$key]);
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    {
        return self::has($key) ? $_REQUEST[$key] : $default;
    }

    /**
     * @return bool Returns true if the current request is a POST request
     */
    public static function isPost()
    {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }

    /**
     * Prevent the creation of instances of this class
     */
    private function __construct() {}

    public static function getString($key){
      $value = self::get($key);
      if(!is_string($value)){
        throw new InvalidEntry("Error: Input must be a string.");
      }

      $value = trim($value);

      if(empty($value)){
        throw new EmptyEntry("Error: Input is empty.");
      }

      return $value;
    }

    public static function getNumber($key){
      $value = self::get($key);
      if(!is_numeric($value)){
        throw new InvalidEntry("Error: Input must be a number.");
      }

      if(empty($value)) {
        throw new EmptyEntry("Error: Input is empty");
      }
      $value = floatval($value);

      return $value;
    }
}
