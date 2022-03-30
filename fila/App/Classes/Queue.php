<?php

namespace App\Classes;

class Queue{

    private $queue = [];

    public function add($item){
        array_push($this->queue, $item);
        return $this;
    }

    public function remove(){
        array_shift($this->queue);
        return $this;
    }

    public function get(){
        return $this->queue;
    }
}
