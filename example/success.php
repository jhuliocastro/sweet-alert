<?php
include __DIR__ . "/../vendor/autoload.php";

use Alertas\Alert;

//Alert::success("Título Teste", "Texto Teste", "#ok");
//Alert::cron("success", "TESTE", "TESTE", "#ok", "5");
Alert::input("TESTE", "text", "#ok", "#ok");