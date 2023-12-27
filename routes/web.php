<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\DB;

 DB::connection()->getPdo();

// try {
//     DB::connection()->getPdo();
// } catch (\Exception $e) {
//     die("Không thể kết nối đến cơ sở dữ liệu: " . $e->getMessage());
// }

$router->get('/patient/sign-up', 'Patient\SignUpController@index');
$router->post('/patient/sign-up', 'Patient\SignUpController@signUp');
