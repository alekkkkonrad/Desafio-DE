<?php

//1)

    $nomes = ['Francisco Souza', 'Guilherme Rosa', 'Arthur Golveia'];

    $cliente1 = new stdClass();
    $cliente1->nome = $nomes[0];

    $cliente2 = new stdClass();
    $cliente2->nome = $nomes[1];

    $cliente3 = new stdClass();
    $cliente3->nome = $nomes[2];

    $arrayDeClientes = [$cliente1, $cliente2, $cliente3];
    
    echo('Nome do segundo cliente: '.$arrayDeClientes[1]->nome.'<br><br>');

//--------------------------------------------------------------//

//2)

    $arrayDeNascimento = [
        'Francisco Souza' => '10-12-1996',
        'Arthur Golveia' => '14-01-2000',
        'Guilherme Rosa' => '26-05-1985',
        'Marcelo Planalto' => '26-05-1985',
    ];

    $controle = 0;

    foreach($arrayDeNascimento as $chave => $valor){
        for($x=0;$x<count($arrayDeClientes);$x++){
            if($arrayDeClientes[$x]->nome == $chave){
                $arrayDeClientes[$x]->nascimento = $valor;
                
            }
        }
        $controle++;
        if($controle > count($arrayDeClientes)){
            $clienteNovo = new stdClass();
            $clienteNovo->nome = $chave;
            $clienteNovo->nascimento = $valor;
            array_push($arrayDeClientes, $clienteNovo);
        }
    }

//--------------------------------------------------------------//

//3)

    $arrOrdenado = ordena($arrayDeClientes);
    imprime($arrOrdenado);

    function ordena($clientes){

        $arrClientesCadeado = [];

        //gera array com chaves
        for($x=0;$x<count($clientes);$x++){
            $arrClientesCadeado[$clientes[$x]->nome] = $clientes[$x]->nascimento;
        }
        
        //estrutura o valor da data para ordenação posterior
        foreach($arrClientesCadeado as $chave => $valor){
            $data = explode('-', $valor);
            $reverse = array_reverse($data);
            $arrClientesCadeado[$chave] = implode('', $reverse);
        }
        //ordena
        asort($arrClientesCadeado);
        foreach($arrClientesCadeado as $chave => $valor){
            $ano = substr($valor, 0, 4);
            $mes = substr($valor, 4, 2);
            $dia = substr($valor, 6, 2);
    
            //recria a string inicial de data
            $arrClientesCadeado[$chave] = $dia.'-'.$mes.'-'.$ano;
        }
        return $arrClientesCadeado;
    }

    function imprime($clientes){
        foreach($clientes as $chave => $valor){
            echo "$chave nascido em $valor<br>";
        }
    }
?>

