<?php

class Book {
    private $kayttajaid;
    private $etumini;
    private $sukunimi;

    public function __construct($kayttajaid = null, $etumini = "", $sukunimi = "") {
       
        $this->kayttajaid = $kayttajaid;
    
        $this->etumini = $etumini;
    
        $this->sukunimi = $sukunimi;
    
    }

    public function set_kayttajaid($katyyajaid) {
        $this->kayttajaid = $katyyajaid;
    }
    public function set_etumini($etumini) {
        $this->etumini = $etumini;
    }
    public function set_sukunimi($sukunimi) {
        $this->sukunimi = $sukuumini;
    }

    public function get_kayttajaid() {
        return $this->kayttajaid;
    }
    public function get_etumini() {
        return $this->etumini;
    }
    public function get_sukunimi() {
        return $this->sukunimi;
    }


}
?>