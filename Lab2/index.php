<?php

require_once "vendor/autoload.php";
use App\Model\BaseModel;
use App\Controller\BaseController;
use App\Model\Database;
use App\Core\Route;


$model = new BaseModel;
$database = new Database;
$controller = new BaseController;
$route = new Route;
$database->HelloWorld();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>haudppc07638</title>
    <style>
    </style>
</head>
<body>

    <h1>Danh Phuc Hau</h1>

    <div>
        <p>Sử dụng Class Controller: <span><?php echo $controller->getController(); ?></span></p>
        
        <p>Sử dụng Class Route: <span><?php echo $route->getRoute(); ?></span></p>
        
        <p>Sử dụng Class Model: <span><?php echo $model->getModel(); ?></span></p>
    </div>

</body>
</html>
