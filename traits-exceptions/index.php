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

class Pc
{
    protected $marca;
    protected $modello;
    protected $caratteristiche;
    protected $prezzoFornitore;
    protected $prezzoVendita;


    function __construct(string $marca, string $modello, array $caratteristiche,float $prezzoFornitore, float $prezzoVendita) 
    {
        $this->marca = $marca;
        $this->modello = $modello;
        $this->caratteristiche = $caratteristiche;
        $this->prezzoFornitore = $prezzoFornitore;
        $this->prezzoVendita = $prezzoVendita;
    }

    function calcPrezzo()
    {
        return $this->prezzoVendita += $this->prezzoFornitore * 30 / 100;
    }

    function getPrezzo()
    {
       return $this->prezzoVendita;
    }


}

$pc01 = new Pc('asus','yserie',['16gb ram','1tb ssd','i7'],499.99,600);
//$pc01 = new Pc('asus','yserie',['16gb ram','1tb ssd','i7'],499.99,calcPrezzo());


var_dump($pc01->getPrezzo());

class Schermo extends Pc
{
    protected $dimensioni;
    protected $classEnerg;

    function __construct(string $marca, string $modello, array $caratteristiche, float $prezzoFornitore, float $prezzoVendita, float $dimensioni, string $classEnerg) 
    {
        parent::__construct($marca, $modello, $caratteristiche, $prezzoFornitore, $prezzoVendita);
        $this->dimensioni = $dimensioni;
        $this->classEnerg = $classEnerg;
    }
}