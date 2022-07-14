<?php

if (!defined("FOLD_PROYECT")) define("FOLD_PROY", $_SERVER["CONTEXT_DOCUMENT_ROOT"] . "/Alejandro/Paginas/Software-Casilleros/");
// if (!defined("FOLD_PROYECT")) define("FOLD_PROY", $_SERVER["CONTEXT_DOCUMENT_ROOT"] . "/");

if (!defined("FOLDER_TEMPLATE")) define("FOLDER_TEMPLATE", FOLD_PROY . "template/");


/*TRAER LOS ESTILOS PARA EL TEMPLATE*/

/*Encuentra la carpeta proyecto*/
if (!defined("URL_PROY")) define("URL_PROY", "/Alejandro/Paginas/Software-Casilleros/");
// if (!defined("URL_PROY")) define("URL_PROY", "/");

/*Seguido, encuentra la carpeta 'resources' con los recursos necesarios*/
if(!defined("URL_RS")) define("URL_RS", URL_PROY."resources/");


