<?php
require __DIR__."/Vendor/autoload.php";

use CoffeeCode\Router\Router;

session_start();

$router = new Router(URL_BASE);

//Controllers
$router->namespace("Source\Controllers");

/*
 * Admin
 */

//Home admin
$router->group("admin");
$router->get("/", "Admin:home");

/*
 * User
 */

//Home
$router->group(null);
$router->get("/", "Web:home");
//$router->get("/{filter}", "Web:home");

//Contato
$router->group("contact");
$router->get("/", "Web:contact");
$router->post("/", "Web:contact");
$router->delete("/", "Web:contact");
$router->get("/{sector}", "Web:contact");

//Login
$router->group("login");
$router->get("/", "Web:login");
$router->post("/", "Web:login");

//Register
$router->group("register");
$router->get("/", "Web:register");
$router->post("/", "Web:register");

//Erros
$router->group("oops");
$router->get("/{err-code}", "Web:error");

$router->dispatch();

if($router->error()){
    $router->redirect("/oops/{$router->error()}");
}