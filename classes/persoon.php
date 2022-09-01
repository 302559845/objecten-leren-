<?php

class persoon
{
public $naam;
private $leeftijd;
protected $geslacht;
public $isStudent;
public $gemiddeldCijfer;
function __construct(string $naam, int $leeftijd, string $geslacht ){
    $this->naam = $naam;
    $this->leeftijd = $leeftijd;
    $this->geslacht = $geslacht;
    echo"\n Nieuw persoon-object aangemaakt" . "<br>";
    echo"\n De property naam is " . $this->naam . "<br>";
}
}