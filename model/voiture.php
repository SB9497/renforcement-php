<?php
// model/voiture.php
class voiture {
    // Propriétés
    protected $marque;
    protected $modele;
    protected $prix;
    protected $couleur;
    protected $annee;
    protected $image_url;

    // Constructeur
    public function __construct($marque, $modele, $prix, $couleur, $annee, $image_url) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->prix = $prix;
        $this->couleur = $couleur;
        $this->annee = $annee;
        $this->image_url = $image_url;
    }

    // Méthode pour afficher la voiture
    public function afficher() {
        echo '<div class="car">';
        echo '<img src="' . htmlspecialchars($this->image_url) . '" alt="Voiture">';
        echo '<h3>' . htmlspecialchars($this->marque) . '</h3>';
        echo '<p>Modèle: ' . htmlspecialchars($this->modele) . '</p>';
        echo '<p>Prix: ' . htmlspecialchars($this->prix) . '€</p>';
        echo '<p>Couleur: ' . htmlspecialchars($this->couleur) . '</p>';
        echo '<p>Année: ' . htmlspecialchars($this->annee) . '</p>';
        echo '</div>';     
    }
}
?>
