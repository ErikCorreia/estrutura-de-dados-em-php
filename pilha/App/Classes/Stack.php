<?php

namespace App\Classes;

class Stack{

    private $items = [];
    
    private $stack_size;

    private $count = 0;


    // constructor da pilha
    public function __construct($stack_size){
        $this->stack_size = $stack_size;
        echo '<h3 style="color: green;"> Pilha criada com limite de 100 items! </h3>';
        return $this;
    }

    // adiciona um item na pilha
    public function push($item){
        if($this->count < $this->stack_size) {
            $this->items[] = $item;
            $this->count++;
        }else {
            echo "Pilha cheia";
        }
    }

    // remove um item da pilha
    public function pop(){
        if($this->count > 0) {
            array_pop($this->items);
            $this->count--;
        }else {
            echo "Pilha vazia";
        }
    }

    // retorna os item da pilha
    public function getItemsFromPilha(){
        return $this->items;
    }

}
