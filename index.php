<!-- 
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online;
ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario;
ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito... 
-->

<?php

class Product
{
    protected $name;
    protected $desc;
    protected $price;
    protected $discount;
    protected $qty;

    function __construct(string $name, string $desc, float $price, float $discount, float $qty) 
    {
        $this->name = $name;
        $this->desc = $desc;
        $this->price = $price;
        $this->discount = $discount;
        $this->qty = $qty;
    }

    public function calcDiscount()
    {
       return $this->price -= $this->price * $this->discount / 100;
    }
}

class Tv extends Product
{
    protected $brand;
    protected $size;

    function __construct(string $name, string $desc, float $price, float $discount, float $qty, string $brand, float $size) 
    {
        parent::__construct($name, $desc, $price, $discount, $qty);
        $this->brand = $brand;
        $this->size = $size;
    }
}

class Utente
{
    protected $name;
    protected $lastname;
    protected $email;
    public $username;
    protected $password;

    function __construct(string $name, string $lastname, string $email, string $username, string $password) 
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }
}

class Premium extends Utente
{
    protected $card;
    
    function __construct(string $name, string $lastname, string $email, string $username, string $password, string $card) 
    {
        parent::__construct($name, $lastname, $email, $username, $password);
        $this->card = $card;
    }
}

//esempio di nuovo prodotto
$xbox = new Product('xbox','consol game', 299.99, 10, 100);

//esempio sottoclasse tv
$tv75swdg32 = new Tv('tv75swdg32','tv oled ultima generazione', 3000, 20, 10,'lg', 75);

//esempio utente
$u1234 = new Utente('Mario','Rossi','Mario_Rossi@libero.it','Supermario','fungo');

//esempio utente premium
$p1234 = new Premium('Luigi','Rossi','Luigi-rs@gmail.com','luigino','verde','super1234');


/* qui visioniamo gli oggetti definiti in precedenza  */
var_dump($xbox);        
var_dump($tv75swdg32);
var_dump($u1234);
var_dump($p1234);

var_dump($u1234->username); //e possibbile visionarlo perche e in pubblic

var_dump($u1234->getPassword()); // e stato possibile visionarlo anche se in pubblic tramite la funzione getPassword

var_dump($xbox->calcDiscount()); // qui verifichiamo lo sconto applicato

var_dump($tv75swdg32->calcDiscount()); // qui verifichiamo il fattore ereditarieta anche per le function

