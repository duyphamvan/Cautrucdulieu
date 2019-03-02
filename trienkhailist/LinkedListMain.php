<?php
/**
 * Created by PhpStorm.
 * User: duy
 * Date: 29/01/2019
 * Time: 04:02
 */
include_once 'LinkList.php';


$linkedList = new LinkList();
$linkedList->insertFirst(11);
$linkedList->insertFirst(22);
$linkedList->insertLast(33);
$linkedList->insertLast(44);
$totalNodes = $linkedList->totalNodes();
$linkData = $linkedList->readList();

echo $totalNodes;
echo '<hr/>';
echo implode('-',$linkData);