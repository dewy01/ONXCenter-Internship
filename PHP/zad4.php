<?php

class Tezaurus {
    public $tezaurus;

    //https://www.php.net/manual/en/function.array-key-exists.php
    //array_key_exists — Checks if the given key or index exists in the array

    public function getSynonyms($word) {
        if (array_key_exists($word, $this->tezaurus)) {
            $synonyms = $this->tezaurus[$word];
        } else {
            $synonyms = [];
        }

        $result = [
            'word' => $word,
            'synonyms' => $synonyms
        ];

        //https://www.php.net/manual/en/function.json-encode.php
        // json_encode — Zmiana wyniku na typ json

        return json_encode($result);
    }
}

// Przykladowe dane
$tezaurusData = array("market" => array("trade"),"small" => array("little", "compact"));

// Obiekt z danymi przykladowymi
$tezaurus = new Tezaurus($tezaurusData);

// Test
echo $tezaurus->getSynonyms("small"); 
echo $tezaurus->getSynonyms("asleast"); 


?>