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

    function __construct($name, $desc, $price, $discount, $qty) 
    {
        $this->name = $name;
        $this->desc = $desc;
        $this->price = $price;
        $this->discount = $discount;
        $this->qty = $qty;
    }
}

class Tv extends Product
{
    protected $brand;
    protected $size;

    function __construct($name, $desc, $price, $discount, $qty, $brand, $size) 
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
    protected $username;
    protected $password;

    function __construct($name, $lastname, $email, $username, $password) 
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
    }
}

class Premium extends Utente
{
    protected $card;
    
    function __construct($name, $lastname, $email, $username, $password, $card) 
    {
        parent::__construct($name, $lastname, $email, $username, $password);
        $this->card = $card;
    }
}