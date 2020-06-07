<?php 
/*
include_once("system/database/database.php");
include_once("system/classes/loader.php");
include_once("system/classes/router.php");
include_once("system/database/loader.php");*/
?>

<?php 

function autoload($className)
{   
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
	
		
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    require $fileName;
}
spl_autoload_register('autoload');

?>

<?php 
use system\database\Database;
use system\classes\Loader;
use system\database\Config;
use system\classes2\Loader2;
use system\classes\Router;


$db=new Database();
//$db=new Loader();
$db2=new Loader2();
$db3=new Router();
$db4=new Config();

/*
$db5=new Loader(); 
$db5->carga1();*/


//namespace\sub\func();
?>