<?php
class Log
{
  public $filename;
  public $handle;

  public function __construct($prefix='log'){
    $this->filename = $prefix-'YYYY-MM-DD.log';
    $this->handle = fopen($this->filename, 'a');
  }

  public function __desctruct(){
    fclose($this->handle);
  }

  public function logMessage($logLevel, $message) {
    $date = new DateTime();
    $entry = $date->format('Y-m-d H:i:s') . " " . $logLevel . " ". $message . "\n";
    echo $entry;
    fwrite($this->handle, PHP_EOL . $entry);
  }

  public function info($message) {
    self::logMessage('INFO', $message);
  }

  public function error($messgage) {
    self::logMessage('ERROR', $message);
  }
}

?>
