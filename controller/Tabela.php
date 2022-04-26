<?php
class Tabela
{
  private $message = "";
  public function __construct()
  {
    Transaction::open();
  }
  public function controller()
  {
    Transaction::get();
    $computador = new Crud("computador");
    $resultado = $computador->select();
    $tabela = new Template("view/tabela.html");
    $tabela->set("linha", $resultado);
    $this->message = $tabela->saida();
  }
  public function getMessage()
  {
    return $this->message;
  }
  public function __destruct()
  {
    Transaction::close();
  }
}
