<?php
/**
 * Created by PhpStorm.
 * User: duy
 * Date: 28/01/2019
 * Time: 23:15
 */
include "ArrayList.php";
$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);
echo $listInteger->get(1).'<br/>';
echo $listInteger->get(6);