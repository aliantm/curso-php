
<?php

$name = "Miguel";
$isDev = true;
$age = 18;

define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg' );

$output = "Hola $name, con una edad de $age";


$outputAge = match (true) {
$age < 2     => "You are a baby, $name ",
$age < 10    => "You are a kid, $name ",
$age < 18    => "You are a boy, $name ",
$age === 18  => "You have high age, $name ",
$age < 40    => "You are a young adult, $name ",
$age < 60    => "You are a ancient, $name ",
};

$bestLanguages = ["PHP","JavaScript","Pyton",1,2];
$bestLanguages[3] = "Java";
$bestLanguages[] = "TypeScript";

$person = [
    "name"      =>  "Miguel",
    "age"       =>  78,
    "isDev"     =>  true,
    "languages" =>  ["PHP","JavaScript","Pyton"],
];
$person["name"] = "pheralb";
$person["languages"][] = "Java";

?>
<ul>
    <?php foreach ($bestLanguages as $key => $language) : ?>
          <li><?= $key . " " . $language;?></li>
    <?php endforeach; ?>
    
</ul>
<h2><?= $outputAge;?></h2>

<img src="<?= LOGO_URL?>" alt="PHP Logo" width="200">
<h1>
    <?= $output;?>
</h1>
<style>
    :root {
        color-scheme: light dark ;
    }

    body { 
        display: grid;
        place-content: center;
    }
</style>
