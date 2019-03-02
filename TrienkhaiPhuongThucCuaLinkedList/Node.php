<?php
/**
 * Created by PhpStorm.
 * User: duy
 * Date: 29/01/2019
 * Time: 05:25
 */

class Node
{
    public $data;
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }

    public function getData()
    {
        return $this->data;
    }
}