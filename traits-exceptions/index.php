<!-- 
Descrizione:
Inventate due classi a piacere una che estende l'altra.
Ciascuna classe avrá un constuctor e un paio di metodi a piacere.
Create un paio di traits da usare nella classe figlia.
in una funzione gestite eventuali errori usando un exception
create una struttura dati (array di oggetti) e usate un ciclo foreach per mostrare i dati a schermo (con html, non var_dump)
invocate il metodo nel quale avete usato l'exception passado al metodo dei valori sbagliati
usate il try/catch per gestire il la richiesta e mostrare all'utente un messaggio di errore.
-->
<?php 

 error_reporting(E_ALL);
 ini_set("display_errors", 1);

class Pc
{
    protected $marca;
    protected $modello;
    protected $caratteristiche;
    protected $prezzoFornitore;
    protected $prezzoVendita;


    function __construct(string $marca, string $modello, array $caratteristiche,float $prezzoFornitore, float $prezzoVendita = 0) 
    {
        $this->marca = $marca;
        $this->modello = $modello;
        $this->caratteristiche = $caratteristiche;
        $this->prezzoFornitore = $prezzoFornitore;
        $this->prezzoVendita = $this->calcPrezzo($prezzoFornitore, $prezzoVendita);
    }

    function calcPrezzo(float $prezzoFornitore, float $prezzoVendita)
    {
        if(!empty($prezzoVendita)) {
            return $prezzoVendita;
        }
        return  $prezzoFornitore + $prezzoFornitore * 30 / 100;
    }

    function getPrezzo()
    {
       return $this->prezzoVendita;
    }

    function getForn()
    {
        return $this->prezzoFornitore;
    }


}

$pc01 = new Pc('asus','yserie',['16gb ram','1tb ssd','i7'], 499.99);

//var_dump($pc01->getPrezzo());
//var_dump($pc01->getForn());

class Schermo extends Pc
{
    protected $dimensioni;
    protected $classEnerg;

    function __construct(string $marca, string $modello, array $caratteristiche, float $prezzoFornitore, float $prezzoVendita = 0, float $dimensioni, string $classEnerg) 
    {
        parent::__construct($marca, $modello, $caratteristiche, $prezzoFornitore, $prezzoVendita);
        $this->dimensioni = $dimensioni;
        $this->classEnerg = $classEnerg;
    }

    function calcPrezzo(float $prezzoFornitore, float $prezzoVendita)
    {
        if(!empty($prezzoVendita)) {
            return $prezzoVendita;
        }
        return  $prezzoFornitore + $prezzoFornitore * 20 / 100;
    }
}

$sh01 = new Schermo('lg','27uhd500',['4k','risposta 1MLs','300hz'],299.99, 0,27,'a++');

//var_dump($sh01->getPrezzo());