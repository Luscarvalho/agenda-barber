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
$router->get("/register", "Admin:register");
$router->post("/register", "Admin:register");
$router->get("/horarios", "Admin:schedules");
$router->post("/horarios", "Admin:schedules");
$router->get("/agenda", "Admin:schedule");
$router->get("/perfil", "Admin:profile");


/*
 * User
 */

//Home
$router->group(null);
$router->get("/", "Users:home");
$router->get("/agendar", "Users:schedules");
$router->post("/agendar", "Users:schedules");
$router->get("/agenda", "Users:schedule");
$router->get("/perfil", "Users:profile");

/*
 * Gerais
 */

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