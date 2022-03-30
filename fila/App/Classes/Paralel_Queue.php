<?php

namespace App\Classes;

class Paralel_Queue{
    
        private $priority_1 = [];
        private $priority_2 = [];
    
        //filas por prioridade será levado em consideração a idade
        public function add($item){
            switch($item['age']){
                case ($item['age'] < 50):
                    array_push($this->priority_1, $item);
                    break;
                case ($item['age'] >= 50):
                    array_push($this->priority_2, $item);
                    break;
            }

            return $this;

        }
    
        //Filas paralelas sao atendidas separadamente
        public function remove(){

            if(count($this->priority_1) > 0){
                array_shift($this->priority_1);
            };
            

            if(count($this->priority_2) > 0){
                array_shift($this->priority_2);
            };

            return $this;
        }
    
        public function getObjectQueue(){
            $cue = [$this->priority_1, $this->priority_2];
            return $cue;
        }
}