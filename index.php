<?php
ob_start();
require __DIR__ . "/vendor/autoload.php";

/**
 * BOOTSTRAP
*/

use CoffeeCode\Router\Router;
use Monolog\Handler\StreamHandler;
use Psr\Log\LogLevel;
use Source\Core\Session;
use Source\Support\Debug;


// START DEBUG

$debug = new Debug('name-debug');
$debug->pushHandler(new StreamHandler('name-this-log.log', LogLevel::DEBUG));

// add records to the log
$debug->warning('name-debug-warning-host', ["server" => $_SERVER["HTTP_HOST"]]);
$debug->error('name-debug-error-request', ["request" => $_SERVER["REQUEST_URI"]]);

//DISPLAY WHOOPS
$debug->display();
// END DEBUG


$session = new Session();
$route = new Router(url(), ":");
$route->namespace("Source\App");

/**
 * WEB ROUTES
 */
$route->group(null);
$route->get("/", "Web:home");



//auth
$route->group(null);
$route->get("/entrar", "Web:login");
$route->post("/entrar", "Web:login");
$route->get("/cadastrar", "Web:register");
$route->post("/cadastrar", "Web:register");
$route->get("/recuperar", "Web:forget");
$route->post("/recuperar", "Web:forget");
$route->get("/recuperar/{code}", "Web:reset");
$route->post("/recuperar/resetar", "Web:reset");

//optin
$route->group(null);
$route->get("/confirma", "Web:confirm");
$route->get("/obrigado/{email}", "Web:success");


//APP
$route->group("/app");
$route->get("/", "App:home");
$route->get("/sair", "App:logout");

/**
 * ERROR ROUTES
*/
$route->group("/ops");
$route->get("/{errcode}", "Web:error");

/**
 * ROUTE
 */
$route->dispatch();

/**
 * ERROR REDIRECT
 */
if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}


ob_end_flush();