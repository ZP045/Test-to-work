<?php

require __DIR__.'/vendor/autoload.php';

//DEPENDÊNCIAS 
use \App\WebService\ViaCEP;

$dadosCEP = ViaCEP::consultarCEP("01001000");
