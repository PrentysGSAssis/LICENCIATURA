<?php

$stringJson = '{"nome":"Prentys","anoNascimento":1989,"profissao":"Professor"}';

var_dump(json_decode($stringJson, true));