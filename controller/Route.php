<?php
class Route
{
  private $uri = [];
  public function __construct($app)
  {
    $uriGet = $_SERVER["REQUEST_URI"];
    foreach ($app as $value) {
      $uri = str_replace($value, "", $uriGet);
    }
    $this->uri = explode("/", $uri);
  }
  public function getClassName()
  {
    if (isset($this->uri[1])) {
      return $this->uri[1];
    }
  }
  public function getMethodName()
  {
    if (isset($this->uri[2])) {
      return $this->uri[2];
    }
  }
}
