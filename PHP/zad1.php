<?php

//https://www.php.net/manual/en/functions.arguments.php
//Example #11 Using ... to access variable arguments

//https://www.php.net/manual/en/functions.anonymous.php
//Example 4 Closures and scoping

class Pipeline
{
    public static function make(...$functions)
    {
        // Przechowanie wyniku jako $var do nastepnej funckji
        return function ($var) use ($functions) {
            $result = $var;

            //Przejscie przez $functions i wykonanie z zapisana wartoscia $result
            foreach ($functions as $function) {
                $result = $function($result);
            }

            //zwraca wynik ostatniej funckji
            return $result;
        };
    }
}

// Test
$Test = Pipeline::make(function ($var) { return $var * 3; },function ($var) { return $var + 1; },function ($var) { return $var / 2; });

// Oczekiwany wynik: 5
$result = $Test(3); 
echo $result;

?>
