<?php
/**
 * Created by PhpStorm.
 * User: duy
 * Date: 29/01/2019
 * Time: 18:32
 */

include_once 'MyLinkedList.php';
$linkedList = new MyLinkedList();
//them vao dau phan tu
$linkedList->addFirst(11);
$linkedList->addFirst(22);

$totalNodes = $linkedList->size();
//tong so phan tu va in ra so phan tu
echo $totalNodes;
echo '<br/>';
$linkData = $linkedList->printList();
echo implode('--->',$linkData);
echo '<hr/>';

//them vao cuoi phan tu
$linkedList->addLast(33);
$linkedList->addLast(44);
$totalNodes = $linkedList->size();
echo $totalNodes;
echo '<br/>';
$linkData = $linkedList->printList();
echo implode('--->',$linkData);
echo '<hr/>';

//them phan tu vao 1 vitri
$linkedList->addAtPo(55,2);
$linkData = $linkedList->printList();
echo implode('--->',$linkData);
echo '<hr/>';

//xoa 1 phan tu tai vi tri index
$linkedList->removeByIndex(4);
$linkData = $linkedList->printList();
echo implode('--->',$linkData);
echo '<hr/>';
//xoa 1 phan tu cho truoc
$linkedList->removeNode(11);
$linkData = $linkedList->printList();
echo implode('--->',$linkData);
echo '<hr/>';
//truy cap 1 phan tu trong index
echo $linkedList->get(2);
echo '<hr/>';
// lay ve so luong cac phan tu cua danh sach
echo $linkedList->size();
echo '<hr/>';
// in ra so phan tu cua danh sach
echo implode('--->',$linkedList->printList()) .'<hr/>';
//kiem tra phan tu co trong danh sach khong
echo $linkedList->contains(33).'<hr/>';
//tra ve vi tri cua phan tu trong danh sach
echo implode(',',$linkedList->indexOf(55)) ;
