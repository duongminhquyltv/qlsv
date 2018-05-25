<?php
error_reporting(E_ALL | E_STRICT);

include dirname(__FILE__) . "/../vendor/src/Queries/Base.php";
include dirname(__FILE__) . "/../vendor/src/Queries/Common.php";
include dirname(__FILE__) . "/../vendor/src/Queries/Insert.php";
include dirname(__FILE__) . "/../vendor/src/Queries/Select.php";
include dirname(__FILE__) . "/../vendor/src/Queries/Update.php";
include dirname(__FILE__) . "/../vendor/src/Queries/Delete.php";
include dirname(__FILE__) . "/../vendor/src/Literal.php";
include dirname(__FILE__) . "/../vendor/src/Structure.php";
include dirname(__FILE__) . "/../vendor/src/Utilities.php";
include dirname(__FILE__) . "/../vendor/src/Query.php";

use Envms\FluentPDO\Query;

$pdo = new PDO("mysql:dbname=qlsv;host=localhost", "root", "");
$pdo -> exec("SET CHARACTER SET utf8");

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);

$fluent = new Query($pdo);

function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}

