<?php

// Equipe:
// Matheus Almeida Macêdo Landim - 2021211623  
// Tagore Matheus dos Santos Costa - 201310128

class Cliente{
  private $nome;
  private $idade;
  protected $ingresso;

  public function consultarCliente($id){

    $clientes = array("Matheus","Tagore");
    $idades = array(20,25);

    for ($i = 0; $i <= $id; $i++){

      if ($i == $id){ 

        echo "\nNome: $clientes[$i]\nIdade: $idades[$i]\n";

      }
    }
  }

}

class Filmes{
  public $filme;
  public $rating;

  public function consultarFilme($i){
    $filmes = array("Godzilla e Kong: O Novo Império","Kung Fu Panda 4","Duna - Parte 2");
    $rating = array(12,10,14);

    echo "$filmes[$i] - Classificação: $rating[$i] anos | ";
  }
}

class Salas{
  protected $salaNum;

  public function salaFilmes($i){
    $salas = array(6,4,2);

    echo "Sala: $salas[$i]\n";
  }

}

class Ingressos{
  protected $ingresso = array("Não", "Não", "Não"); 

  public function consultarIngresso($id){
    $ingresso = $this->ingresso;
    echo "Tem ingresso?: $ingresso[$id]\n\n";
  }

  public function comprarIngresso($id){

    if ($this->ingresso[$id] == "Não"){

      $this->ingresso[$id] = "Sim";
      echo "Ingresso comprado com sucesso! Bom filme!\n\n";
      return "Sim";

    } else if ($this->ingresso[$id] == "Sim") {

      echo "O cliente já tem um ingresso!\n\n";

    }
  }
}

$cliente = new Cliente();
$filme = new Filmes();
$sala = new Salas();
$ingresso = new Ingressos();

echo "Bem-vindo!\n\n";

while (true){
  echo "Por favor, escolha uma das alternativas abaixo:\n";
  echo "1 - Consultar o cliente\n";
  echo "2 - Consultar filmes\n";
  echo "3 - Comprar Ingresso\n\n";

  $opcao = readline();

  if ($opcao == 1){

    echo "Digite o ID do cliente: ";
    $id = readline();

    $cliente->consultarCliente($id);
    $ingresso->consultarIngresso($id);
  }
  if ($opcao == 2){
    echo "**********************\n";
    echo "Filmes em cartaz: \n\n";

    for ($i=0; $i<3; $i++){

      $filme->consultarFilme($i);
      $sala->salaFilmes($i);

    }
    echo "**********************\n";
    echo "\n";
  }

  if ($opcao == 3){
    echo "Digite o ID do Usuário: ";
    $id = readline();
    $ingressoStatus = $ingresso->comprarIngresso($id);
    $ingresso->consultarIngresso($id, $ingressoStatus);
  }
} 