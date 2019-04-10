<? php
require 'routes.php';

$url = $app->request->getUrl();
require $app->router->direct($url);
