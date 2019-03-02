<?php
/**
 * Created by PhpStorm.
 * User: duy
 * Date: 29/01/2019
 * Time: 05:28
 */
include_once 'Node.php';
class MyLinkedList
{
    private $count;
    private $head;
    private $last;

    function __construct()
    {
        $this->count = 0;
        $this->head = NULL;
        $this->last = NULL;
    }
    //1:them 1 phan tu moi vao danh sach dua vao vitri va data
    public function addAtPo($data,$position)
    {
        if ($position <= $this->count){
            if ($position==0){
                $this->addFirst($data);
            }else if ($position == $this->count){
                $this->addLast($data);
            }else{
                $this->add($data,$position);
            }
        }else{
            echo "ERROR";
        }
    }

    private function add($data, $position)
    {
        $currentnode = $this->head;
        $node = new Node($data);

        for ($i =1; $i <= $position; $i++){
            if ($position==$i){
                $nextNode = $currentnode->next;
                $currentnode->next = $node;
                $node->next = $nextNode;
                $this->count++;
                break;
            }
            $currentnode = $currentnode->next;
        }

    }

    //2: them phan tu vao dau d sach
    public function addFirst($data)
    {
        $node = new Node($data);
        $node->next = $this->head;
        $this->head = $node;
        if ($this->last==NULL)
            $this->last = $node;
        $this->count++;
    }

    //3: them phan tu vao cuoi danh sach
    public function addLast($data)
    {
        if ($this->head !=NULL)
        {
            $node = new Node($data);
            $this->last->next = $node;
            $node->next = NULL;
            $this->last = $node;
            $this->count++;
        }else{
            $this->addFirst($data);
        }
    }
    //xoa phan tu dau danh sach
    public function removeFirst()
    {
        $this->head = $this->head->count;
        $this->count--;
    }

    //4: xoa phan tu thong qua chi so
    public function removeByIndex($index)
    {
        if ($this->count > $index){
            if ($index==0){
                $this->removeFirst();
            }else{
                $this->remove($index);
            }
        }else{
            echo "Error";
        }
    }


    private function remove($index)
    {
        $currentnode = $this->head;
        for ($i = 0; $i < $index; $i++){
            if ($i == $index -1){
                $nodeaf = $currentnode->next;
                $currentnode->next = $nodeaf->next;
                if ($nodeaf->next ==NULL){
                    $this->last = $currentnode;
                }
                $this->count--;
            }
            $currentnode = $currentnode->next;
        }
    }

    //5: xoa 1 phan tu cho truoc
    public function removeNode($key)
    {
        $current = $this->head;
        $previous = $this->head;

        while($current->data != $key)
        {
            if($current->next == NULL)
                return NULL;
            else
            {
                $previous = $current;
                $current = $current->next;
            }
        }

        if($current == $this->head)
        {
            if($this->count == 1)
            {
                $this->lastNode = $this->head;
            }
            $this->firstNode = $this->head->next;
        }
        else
        {
            if($this->last == $current)
            {
                $this->lastNode = $previous;
            }
            $previous->next = $current->next;
        }
        $this->count--;
    }

    //6: truy cap 1 phan tu trong danh sach
    public function get($index)
    {
        if (($this->size() > $index )&&($index >=0)){
            $node = $this->head;
            for ($i = 0; $i <= $index; $i++){
                if ($i == $index){
                    $nodeData = $node->getData();
                    return $nodeData;
                }
                $node = $node->next;
            }
        }else{
            echo "ERROR";
        }
    }

    //6: lay ve so luong cac phan tu cua danh sach
    public function size()
    {
        return $this->count;
    }

    //7: in ra so phan tu cua danh sach
    public function printList()
    {
        $listData = array();
        $node = $this->head;
        while ($node !=NULL)
        {
            array_push($listData, $node->getData());
            $node = $node->next;
        }
        return $listData;
    }

    //8: sao chep danh sach ra 1 danh sach khac
   /* public function clone1()
    {

    }*/

   //9: kiem tra phan tu co trong danh sach khong
    public function contains($data)
    {
        $status = FALSE;
        $currentnode = $this->head;
        for ($i=0; $i<=$this->count-1;$i++){
            if ($data == $currentnode->getData()){
                $status = TRUE;
                break;
            }
            $currentnode = $currentnode->next;
        }
        return $status;
    }

    //10: tra ve vi tri cua phan tu trong danh sach
    /*public function indexOf($key)
    {
        $currentnode = $this->head;
        while($currentnode->data !=$key)
        {
            if ($currentnode->next ==NULL){
                return NULL;
            }else{
                $currentnode = $currentnode->next;
            }
        }
        return $currentnode;

        }
        */
}