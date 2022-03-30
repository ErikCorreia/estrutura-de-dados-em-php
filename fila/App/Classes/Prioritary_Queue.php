<?php

namespace App\Classes;

class Prioritary_Queue{
    private $queue = [];

    public function add($item){
        switch($item){
            case ($item['priority'] == true):
                array_unshift($this->queue, $item);
                break;
            case ($item['priority'] == false):
                array_push($this->queue, $item);
                break;
        }
        return $this;
    }

    public function remove(){
        array_shift($this->queue);
        return $this;
    }

    public function getObjectQueue(){
        return $this->queue;
    }

}