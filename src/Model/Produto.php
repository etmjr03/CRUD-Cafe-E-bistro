<?php

class Produto {
  // Atributos
  private $id;
  private $tipo;
  private $nome;
  private $descricao;
  private $imagem;
  private $preco;

  // Construtor
  public function __construct($id, $tipo, $nome, $descricao, $imagem, $preco){
      $this->id = $id;
      $this->tipo = $tipo;
      $this->nome = $nome;
      $this->descricao = $descricao;
      $this->imagem = $imagem;
      $this->preco = $preco;
  }

  public function getId(){
      return $this->id;
  }

  public function getTipo(){
      return $this->tipo;
  }

  public function getNome(){
      return $this->nome;
  }

  public function getDescricao(){
      return $this->descricao;
  }

  public function getImagem(){
      return $this->imagem;
  }

  public function getPreco(){
      return $this->preco;
  }

  // Retorna o preco formatado
  public function getPrecoFormatado(){
    return 'R$'.number_format($this->getPreco(), 2);
  }

  // Retorna a imagem com a url formatada
  public function getUrlImagem(){
    return './img/'.$this->getImagem();
  }

}