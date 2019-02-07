<?php


class auto{
public $merk_model;
public $kenteken;
public $bouwjaar;
public $brandstof;
public $kilometerstand;
public $apk;
public $prijs;


public function __construct($merk_model, $kenteken, $bouwjaar, $brandstof, $kilometerstand, $apk, $prijs )
{
    $this->merk_model = $merk_model;
    $this->kenteken = $kenteken;
    $this->bouwjaar = $bouwjaar;
    $this->brandstof = $brandstof;
    $this->kilometerstand = $kilometerstand;
    $this->apk = $apk;
    $this->prijs = $prijs;
}


}
echo "<h1>". "Auto gegevens"."</h1>"."<br>";

$auto1 = new auto("Audi A5", "02-JBF-1", 2009, "Diesel", 237.000, "18 augustus 2019
", 50,000 );

echo $auto1->merk_model."<br>";
echo $auto1->kenteken."<br>";
echo $auto1->bouwjaar."<br>";
echo $auto1->brandstof."<br>";
echo $auto1->kilometerstand."<br>";
echo $auto1->apk."<br>";


class klant{
    public $naam;
    public $auto;
    public $kenteken;
    public $adres;
    public $email;
    public $telefoon;


    public function __construct($naam, $auto, $kenteken, $adres, $email, $telefoon )
    {
        $this->naam = $naam;
        $this->auto = $auto;
        $this->kenteken = $kenteken;
        $this->adres = $adres;
        $this->email = $email;
        $this->telefoon = $telefoon;
    }


}
echo "<h2>". "Klant gegevens"."</h2>"."<br>";

$klant1 = new klant("Djornell", "BMW X6", "23-RXX-3", "keulenhof 13", "djornell12@gmail.com", "0614306434");

echo $klant1->naam."<br>";
echo $klant1->auto."<br>";
echo $klant1->kenteken."<br>";
echo $klant1->adres."<br>";
echo $klant1->email."<br>";
echo $klant1->telefoon."<br>";


