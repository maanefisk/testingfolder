<html>
<head>
    <link rel="stylesheet" href="stylesheet.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <head>
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

$randomcharacter = $goodOnes[rand(0,2)];
$randomweapon = $randomcharacter->weapon[rand(0,1)];
$randomenemy = $badOnes[rand(0,2)];
$randomenemyweapon = $randomenemy->weapon[rand(0,1)];

$characterHP = $randomcharacter->HP;
$enemyHP = $randomenemy->HP;
$characterdamage = $randomweapon->damage;
$enemydamage = $randomenemyweapon->damage;
$chHP = ($characterHP - $enemydamage);
$enHP = ($enemyHP - $characterdamage);

echo '<br>  A warrior =  '.$Faramir->name;
echo '<br>  Faramirs random weapon = '.$Faramir->weapon[rand(0,1)];
echo '<br>  One of the Good Ones =  '.$goodOnes[rand(0,2)]->name;
echo '<br>  One of the Good Ones Weapons = '.$goodOnes[rand(0,2)]->weapon[rand(0,1)];
echo '<br>  One of the Bad Ones HP = '.$badOnes[rand(0,2)]->HP;
echo '<br>  One of the Good Ones =  '.$goodOnes[rand(0,2)]->name;
echo '<br>'.$randomcharacter->name;
echo '<br>'.$randomweapon;
echo '<br>'.$randomenemy->name;
echo '<br>'.$randomenemyweapon;
echo '<br>  Characters HP =  '.$randomcharacter->HP;
echo '<br>  Enemy HP =  '.$randomenemy->HP;
echo '<br>  Calculated Characters HP =  '.$chHP;
echo '<br>  Calculated Enemy HP =  '.$enHP;

?>

<br>
<div class="buttoncontainer"><button class="newcharacter">New Character</button><button class="fight">Fight!</button></div>
<br>
<div class="fightarena">
    <div class="characterslot">Characterslot</div>
    <div class="enemyslot">Enemyslot</div>
    <div class="fightaction">
        <div class="ch">Fightaction</div>
        <div class="en">Fightaction</div>
        <div class="chhp">Fightaction</div>
        <div class="enhp">Fightaction</div>
    </div>
</div>
<script>
    $('.newcharacter').click(function() {
        $('.characterslot').text('<?= $randomcharacter->name ?>');
        $('.enemyslot').text('<?= $randomenemy->name ?>');
        $(".fight").css("display", "block");
    });
    $('.fight').click(function() {
        $('.ch').text('<?= $randomcharacter->name ?> has chosen: <?= $randomweapon ?>');
        $('.en').text('<?= $randomenemy->name ?> has chosen: <?= $randomenemyweapon ?>');
        $('.chhp').text('<?= $randomcharacter->name ?> has HP left.');
        $('.enhp').text('<?= $randomenemy->name ?> has HP left.');
    });
</script>
