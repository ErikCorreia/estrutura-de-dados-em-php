<?php
    
    use App\Classes\Stack;

    require_once 'vendor/autoload.php';

    $pilha = new Stack(100);

    for($i = 0; $i <= 100; $i++){
        $pilha->push('item' . $i);
    }

    


    echo '<h3> tem ' . count($pilha->getItemsFromPilha()) . ' itens na pilha</h3>';