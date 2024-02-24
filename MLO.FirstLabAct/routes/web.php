
<?php 
/** @var \Laravel\Lumen\Routing\Router $router */ 
/* 
|--------------------------------------------------------------------- 
----- 
| Application Routes 
|--------------------------------------------------------------------- 
----- 
| 
| Here is where you can register all of the routes for an application. 
| It is a breeze. Simply tell Lumen the URIs it should respond to 
| and give it the Closure to call when that URI is requested. 
| 
*/ 
$router->get('/', function () use ($router) { 
return $router->app->version(); 
}); 
// unsecure routes 
$router->group(['prefix' => 'api'], function () use ($router) { 
$router->get('/users',['uses' => 'UserController@getUsers']);}); 
// more simple routes 
$router->get('/users',['uses' => 'UserController@getUsers']); 
$router->get('/users', 'NewUserController@index'); // get all users records 
$router->post('/users', 'NewUserController@add'); // create new user record 
$router->get('/users/{id}', 'NewUserController@show'); // get user by id 
$router->put('/users/{id}', 'NewUserController@update'); // update user record 
$router->patch('/users/{id}', 'NewUserController@update'); // update user record 
$router->delete('/users/{id}', 'NewUserController@delete'); // delete record