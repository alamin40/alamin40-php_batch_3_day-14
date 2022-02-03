<?php
namespace App\classes;
class StringWordCount
{
    protected $string;
    protected $word;
    protected $character;

    public function __construct($post = null)
    {

    }

    public function index(){

        header('Location: pages/index.php');
    }
}