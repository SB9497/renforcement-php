<?php

class Voiture {
    // Propriétés
    protected $marque;
    protected $modele;
    protected $annee;
    protected $prix;
    protected $kilometrage;
    protected $couleur;

    // Constructeur
    public function __construct($marque, $modele, $annee, $prix) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->prix = $prix;

    }

    // Méthodes Getters
    public function getMarque() {
        return $this->marque;
    }

    public function getModele() {
        return $this->modele;
    }

    public function getAnnee() {
        return $this->annee;
    }

    public function getPrix() {
        return $this->prix;
    }


    // Méthodes Setters
    public function setKilometrage($kilometrage) {
        $this->kilometrage = $kilometrage;
    }

    public function setCouleur($couleur) {
        $this->couleur = $couleur;
    }

    // Méthode pour afficher la voiture
    public function afficher() {
        echo "Marque: " . $this->marque . "<br>";
        echo "Modèle: " . $this->modele . "<br>";
        echo "Année: " . $this->annee . "<br>";
        echo "Prix: " . $this->prix . " €<br>";

    }
}

// Exemple d'utilisation de la classe
$voiture = new Voiture("Toyota", "Corolla", 2020, 18000);
$voiture->afficher();

?>