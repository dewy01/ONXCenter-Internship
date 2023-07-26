<?php

    // https://www.php.net/manual/en/function.usort.php
    // Sortowanie uzywajac wlasnej funkcji

    //0 - w przypadku gdy dwa argumenty są sobie równe;
    //wartość ujemną, gdy pierwszy argument jest mniejszy od drugiego;
    //wartość dodatnią, gdy pierwszy argument jest większy od drugiego;
    
    public function playerRank($rank)
    {
        // Sortowanie rosnaco od najmniejszego score/games/order do najwiekszego
        // Osoba z wczesniejszya pozycja na liscie klasyfikowany wyzej
        function cmp($a, $b){
            if ($a->score !== $b->score) {
                return $a->score - $b->score;
            } elseif ($a->games !== $b->games) {
                return $a->games - $b->games;
            } else {
                return $a->order - $b->order;
            }
        }
        // Sortujemy graczy wedlug zasad okreslonej w funkcji cmp
        usort($this->players, "cmp");

        // Odnajdujemy gracza o podanym rankingu jezeli index jest rowny podanej zmiennej
        foreach ($this->players as $index => $player) {
            if ($index + 1 == $rank) {
                return $player->name;
            }
        }

        // Jezeli nie znaleziono
        return null;
    }

?>