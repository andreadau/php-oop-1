<?php
/* Class AutoTesla
* @author Andreadau 
* @copyright 2021 Andreadau
*/
class AutoTesla {
    public $model;
    public $motor;
    public $optional;
    public $price;


    function __construct(string $model,string $motor,string $optional, int $price){
        $this->model = $model;
        $this->motor = $motor;
        $this->optional = $optional;
        $this->price = $price;
    }
    function __destruct() {
        echo "<h3>Tesla :</h3> : <br>
            Modello : {$this->model},<br>
            Motore : {$this->motor},<br>
            Optional : {$this->optional},<br>
            Price : {$this->price} € <br>";
    }
}

$model_s = new AutoTesla("Model S","Electric","Autopilot, premium interior",85000);
$model_3 = new AutoTesla("Model 3","Electric","Autopilot, black interior",45000);
$model_x = new AutoTesla("Model X","Electric","Autopilot, black interior",11000);
$model_y = new AutoTesla("Model Y","Electric","Full self drive, premium interior",65000);

class Cane {
    public $name;
    public $sesso;
    public $razza;
    public $carattere;

    function __construct(string $name,string $sesso,string $razza,string $carattere){
        $this->name = $name;
        $this->sesso = $sesso;
        $this->razza = $razza;
        $this->carattere = $carattere;
    }
    function __destruct() {
        echo "<h3>Cane :</h3> : <br> Nome : {$this->name},<br>
            Sesso : {$this->sesso},<br>
            Razza : {$this->razza},<br>
            Carattere : {$this->carattere} <br>";
    }
}

$lulli = new Cane("Lulli","Maschio","Alano","Docile e Testardo");
$pallina = new Cane("Pallina","Femmina","Akita Inu","Coraggioso e Caparbio");
$alfry = new Cane("Alfry","Maschio","Basenji","Vivace e Attivo");
$lupetto = new Cane("Lupetto","Femmina","Barboncino","Felice e Resistente");

class Pc {
    public $MotherBoard;
    public $CPU;
    public $SchedaVideo;
    public $Alimentatore;

    function __construct(string $MotherBoard,string $CPU,string $SchedaVideo,int $Alimentatore){
        $this->MotherBoard = $MotherBoard;
        $this->CPU = $CPU;
        $this->SchedaVideo = $SchedaVideo;
        $this->Alimentatore = $Alimentatore;
    }
    function __destruct() {
        echo "<h3>Pc :</h3> : <br> Motherboard : {$this->MotherBoard},<br>
            CPU : {$this->CPU},<br>
            Scheda Video : {$this->SchedaVideo},<br>
            Alimentatore : {$this->Alimentatore} W <br>";
    }
}

$Pc1 = new Pc("Asus z490","i9 11900k","Nvida RTX 3080",1000);
$Pc2 = new Pc("Msi x470","Ryzen 7 5800x","Nvidia RTX 2070",650);
$Pc3 = new Pc("Asus b550","Ryzen 3 3300x","Nvidia RTX 3060 ti",500);
$Pc4 = new Pc("Gigabyte x570","Ryzen 9 5950x","Radeon RX 6800 XT",800);




?>
