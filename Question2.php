<?php

class Guerrier{
    //-----variables-----//
    public $nom;
    public $age;
    public $force;
    public $niveau;

    //------constructor------//
    public function __construct($N, $P, $FO,$NI)
    {
        $this->nom = $N;
        $this->age = $P;
        $this->force = $FO;
        $this->niveau = $NI;
        
    }

     //-----------geters--------//
     public function getNom(){
        return $this->nom;
    }

    public function getAge(){
        return $this->age;
    }

    
    public function getForce(){
        return $this->force;
    }
    public function getNiveau(){
        return $this->Niveau;
    }
    

    //----------setters --------//
    public function setNom($NewNom){
        $this->nom = $NewNom;
    }

    public function setAge($NewAge){
        $this->Age = $NewAge;
    }

    
    public function setForce($NewForce){
        $this->Force = $NewForce;
    }
    public function setNiveau($NewNiveau){
        $this->Niveau = $NewNiveau;
    }

    //----------méthodes-------//
    public function getInfo(){
        return "nom : " . $this->nom.'<br>'. "age : " .$this->prenom.'<br>'. "force : " .$this->Force . '<br>'."nom : " . $this->nom.'<br>'. "age : " ;

    }

    public function setInfo($NewNom, $NewAge, $NewForce , $NewNiveau){
        $NewNom = $_POST['nom'];
        $NewAge = $_POST['age'];
        $NewForce = $_POST['force'];
        $NewForce = $_POST['niveau'];
        $this->nom = $NewNom;
        $this->age = $NewAge;
        $this->Force = $NewForce;
        $this->Force = $NewNiveau;

    }
    
 
}
?>
<?php