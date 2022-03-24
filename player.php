<?php

class Player{
    public $name= '';
    public $monster='';
    public $stats= array(
        'strength'=> 0,
        'agility'=> 0,
        'intelligence'=> 0
    );

    public function __construct($n){
        //set the name
        $this->name = $n;

        //assign ascii char values
        $chars = unpack('C*', $n);
        $arrLength = count($chars);

        //assign stats
        $this->stats['strength'] =intval(gmp_gcd($chars[1] *4, $chars[$arrLength] *4));
        $this->stats['agility'] =intval(gmp_gcd($chars[2] *4, $chars[$arrLength-1] *5));
        $this->stats['intelligence'] =intval(gmp_gcd($chars[3] *2, $chars[$arrLength-2] *3));

        //asign a monster type
        //calculate sum of ASCII values
        $charSum = array_sum($chars);

        //evenly divisible by 5? 4? 3?
        if($charSum % 5 == 0) {
            $this->monster = 'Godzilla';
        }

        elseif($charSum % 4 == 0){
            $this->monster = 'Siren';
        }

        elseif($charSum % 3 == 0){
            $this->monster = 'DonaldTrump';
        }

        else{
            $this->monster = 'Boogieman';
        }
    }
}

?>
