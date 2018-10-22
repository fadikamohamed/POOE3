<?php
/* Déclaration de la class Charactere */
class Charactere {
    /* Déclaration des attributs privé health mana et charac*/
    public $health = 0;
    public $mana = 0;
    public $charac = '';

    /* Déclaration des methodes publique construct, destruct et chat */
    public function construct();

    public function destruct();

    public function chat($charac) {
        
    }

}

?>