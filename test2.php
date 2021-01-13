<html>
<head><link rel="stylesheet" href="stylesheet.css"><head>
<body>
<br>
<div class="buttoncontainer"><button>New Character</button><button>Fight!</button></div>
<br>
<div class="fightarena">
    <div class="characterslot">Characterslot</div>
    <div class="enemyslot">Enemyslot</div>
    <div class="fightaction">Fightaction</div>
</div>

</body>
</html>

<?php

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
    public $weapon = array('Sword','Bow');
    public $HP = 800;
}
class Sam {
    public $name = 'Sam';
    public $title = 'Mayor';
    public $weapon = array('Sword','Shout');
    public $HP = 500;
}
class Galadriel {
    public $name = 'Galadriel';
    public $title = 'Lady';
    public $weapon = array('Magicdamage','Telepathy');
    public $HP = 2000;
}
class Nazgul {
    public $name = 'Nazgul';
    public $title = 'Ringwraith';
    public $weapon = array('Sword','Spreadterror');
    public $HP = 1000;
}
class UrukHai {
    public $name = 'Uruk-Hai';
    public $title = 'Commander';
    public $weapon = array('Sword','Bow');
    public $HP = 600;
}
class Orc {
    public $name = 'Orc';
    public $title = 'Warrior';
    public $weapon = array('Sword','Bow');
    public $HP = 400;
}
//object of class is declared
$Faramir = new Faramir();
$Sam = new Sam();
$Galadriel = new Galadriel();
$Nazgul = new Nazgul();
$UrukHai = new UrukHai();
$Orc = new Orc();
$Sword = new Sword();
$Bow = new Bow();
$Shout = new Shout();
$Magicdamage = new Magicdamage();
$Telepathy = new Telepathy();
$Spreadterror = new Spreadterror();

$goodOnes = array($Faramir, $Sam, $Galadriel);
$badOnes = array($Nazgul, $UrukHai, $Orc);

$randomcharacter = $goodOnes[rand(0,2)]->name;
//properties of class Bird are accessed using object
echo '<br>  A warrior =  '.$Faramir->name;
echo '<br>  Faramirs random weapon = '.$Faramir->weapon[rand(0,1)];
echo '<br>  One of the Good Ones =  '.$goodOnes[rand(0,2)]->name;
echo '<br>  One of the Good Ones Weapons = '.$goodOnes[rand(0,2)]->weapon[rand(0,1)];
echo '<br>  One of the Bad Ones HP = '.$badOnes[rand(0,2)]->HP;
echo '<br>  One of the Good Ones =  '.$goodOnes[rand(0,2)]->name;
echo '<br>'.$randomcharacter;

?>