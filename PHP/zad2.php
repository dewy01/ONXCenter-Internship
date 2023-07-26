<?php

//https://www.codexpedia.com/php/php-checking-if-a-variable-contains-only-digits/#:~:text=For%20checking%20if%20a%20variable,instead%20of%20is_numeric%20and%20is_int
// bool is_numeric - true if the parameter $var is a number(including negative numbers, numbers with decimal places and numbers in scientific notations)


class TextInput
{
    // zmienna typu string
    public $text='';

    public function add($text){
        $this->text = $this->text.$text;
    }

    public function getValue(){
        return $this->text;
    }

}

// Klasa dziedziczaca
class NumericInput extends TextInput
{
    public function add($text){
        if (is_numeric($text)){
            $this->text = $this->text.$text;
        }
    }

}


// Test TextInput
$TextInput = new TextInput();
$TextInput->add('Test');
$TextInput->add(' Zadania');
$TextInput->add(' Drugiego');
echo $TextInput->getValue(); // Oczekiwany wynik: Test Zadania Drugiego

// Test NumericInput
$NumericInput = new NumericInput();
$NumericInput->add('1');
$NumericInput->add(' Test ');
$NumericInput->add('2');
echo $NumericInput->getValue(); // Oczekiwany wynik: 12

?>
