<?php
class Character {
    public $name = '';
    public $title = '';
    public $weapon = array();
    public $HP = 0;
}

class Sword {
    public $damage = 120;
}
class Bow {
    public $damage = 80;
}
class Shout {
    public $damage = 10;
}
class Magicdamage {
    public $damage = 500;
}
class Telepathy {
    public $damage = 200;
}
class Spreadterror {
    public $damage = 200;
}
class Faramir {
    public $name = 'Faramir';
    public $title = 'Captain';
    public $weapon = array('sword','bow');
    public $HP = 800;
}
class Sam {
    public $name = 'Sam';
    public $title = 'Mayor';
    public $weapon = array('sword','shout');
    public $HP = 500;
}
class Galadriel {
    public $name = 'Galadriel';
    public $title = 'Lady';
    public $weapon = array('magicdamage','telepathy');
    public $HP = 2000;
}
class Nazgul {
    public $name = 'Nazgul';
    public $title = 'Ringwraith';
    public $weapon = array('sword','spreadterror');
    public $HP = 1000;
}
class UrukHai {
    public $name = 'Uruk-Hai';
    public $title = 'Commander';
    public $weapon = array('sword','bow');
    public $HP = 600;
}
class Orc {
    public $name = 'Orc';
    public $title = 'Warrior';
    public $weapon = array('sword','bow');
    public $HP = 400;
}
//object of class is declared
$Faramir = new Faramir();
$Sam = new Sam();
$Galadriel = new Galadriel();
$Nazgul = new Nazgul();
$UrukHai = new UrukHai();
$Orc = new Orc();

$goodOnes = array($Faramir, $Sam, $Galadriel);
$badOnes = array($Nazgul, $UrukHai, $Orc);
//properties of class Bird are accessed using object
echo '<br>  A warrior =  '.$Faramir->name;
echo '<br>  Faramirs random weapon = '.$Faramir->weapon[rand(0,1)];
echo '<br>  One of the Good Ones =  '.$goodOnes[rand(0,2)]->name;
echo '<br>  Good Ones Weapons = '.$goodOnes[rand(0,2)]->weapon[rand(0,1)];
echo '<br>  One of the Bad Ones HP = '.$badOnes[rand(0,2)]->HP;
echo '<br>  One of the Good Ones =  '.$goodOnes[rand(0,2)]->name;
echo '<br>  Get a character =', '<script type="text/javascript">', 'characterChooser();', '</script>';

?>

<button onclick="characterChooser()">Click Here</button>
<script>
    function characterChooser(){
        let activeCharacter = <?=$goodOnes[rand(0,2)]->name?> ;
        let activeCharacter2 = 'testo' ;
        return activeCharacter2;
        console.log(activeCharacter2);
    }
    function weaponChooser(){
        let weapon = <?=$lang->get('zipcode')?>;
    }
</script>
