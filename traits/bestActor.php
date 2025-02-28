<?php 
    trait BestActor{
        public $bestActorName;
        
        public function setBestActor($_bestActorName){
            $this->bestActorName = $_bestActorName;
        }

        public function getBestActor(){
            return $this->bestActorName;
        }
    }
?>