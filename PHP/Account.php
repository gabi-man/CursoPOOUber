<?php

class Account 
{
    public $id;
    public $name;
    public $document;
    public $email;
    public $password;

    public function __construct($name, $document)
    {
        $this->name = $name;
        $this->document = $document;
    }

    public function printDataAccount()
    {
        echo "Name: ".$this->name."<br>";
        echo "Document: ".$this->document."<br>";
        echo "Email: ".$this->email."<br>";
        echo "Password: ".$this->password."<br>";
    }
}

?>