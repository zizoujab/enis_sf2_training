<?php
// index.php
// load and initialize any global libraries
require_once 'model.php';
require_once 'controllers.php';

$uri  = $_SERVER['REQUEST_URI'];
if ('/enis/index.php' == $uri ){
    list_action();
} elseif ( startsWith( $uri,'/enis/index.php/show')  && isset($_GET['id'])){
    show_action($_GET['id']);
} else {
    header('Status : 404 not found');
    echo '<html><body><h1>Page Not Found</h1></body></html>';
}


// helper method 
function startsWith($haystack, $needle)
{
    return $needle === "" || strpos($haystack, $needle) === 0;
}
?>