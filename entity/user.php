<?php

   class Article {        
       
       public $date;  
       public $titre;
       public $donnee;
             
       
       public function __construct($titre, $donnee){

           $this->titre = $titre;
           $this->donnee = $donnee;
           $this->date = date('d-m-Y H:i');

       }        
       
          public function getTitre(){
           return $this->titre;
       }        
       
           public function getDonnee(){
           return $this->donnee;
       }        
       
            public function getDate(){
            return $this->date;

       }        
       
       public function setTitre($titre){

           $this->titre = $titre;

       }        
       
       public function setDonnee($donnee){

           $this->donnee = $donnee;

       }        
       
       public function setDate($date){

           $this->date = $date;

       }

   }


