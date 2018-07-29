<?php
require 'vendor/autoload.php';

$app = new Slim\App();

//GET Route
$app->get('/books/{id}', function ($request, $response, $args) {
    // Show book identified by $args['id']
    //$array_content = array('primeiro', 'segundo', 'terceiro' );
    //$array_content[] = $args['id'];
    return json_encode(array(
        'date'=>date("Y-m-d H:i:s")
    ));
});

//POST Route
$app->post('/books', function ($request, $response, $args) {
    // Create new book
});

//PUT Route
$app->put('/books/{id}', function ($request, $response, $args) {
    // Update book identified by $args['id']
});

//DELETE Route
$app->delete('/books/{id}', function ($request, $response, $args) {
    // Delete book identified by $args['id']
});

/*
//OPTIONS Route
$app->options('/books/{id}', function ($request, $response, $args) {
    // Return response headers
});

//PATCH Route
$app->patch('/books/{id}', function ($request, $response, $args) {
    // Apply changes to book identified by $args['id']
});

//Any Route
$app->any('/books/[{id}]', function ($request, $response, $args) {
    // Apply changes to books or book identified by $args['id'] if specified.
    // To check which method is used: $request->getMethod();
});

$app->any('/user', 'MyRestfulController');

//Custom Route
$app->map(['GET', 'POST'], '/books', function ($request, $response, $args) {
    // Create new book or list all books
});

*/

$app->run();