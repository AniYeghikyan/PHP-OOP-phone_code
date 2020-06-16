<style>
    .text{
        color: midnightblue;
        font-size: 20px;
        font-family: sans-serif;
    }

</style>
<?php
require_once './TCO_SQL.php';
include_once 'SelectQuery.php';


$SelectQuery = new SelectQuery('shop','admin', '1234*Admin');
$SelectQuery->connection();
$selectArray = array();

?>
    <form method="get" >
    <input type='tel' name='numb' id='numb'>
    <input type="submit" name="sub" id="sub">
    </form>

<?php

$val = $_GET['numb'];
if (isset($_GET["sub"])){
    $SelectQuery->getUserData($val);
}
