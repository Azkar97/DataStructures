<?php
//Node Class
    class Node{
        public $data;
        public $next;

        public function __construct($data)
        {
            $this->data = $data;
            $this->next = null;
        }
    }

    //Linked List Class
    class LinkedList {
        public $head;

        function __construct()
        {
            $this->head = null;
        }

        function insert($data){
            $node = new Node($data);
            $node->next = $this->head;
            $this->head = &$node;
        }
    }

    $linkedlist = new LinkedList();

    $arr = [1,2,3,4];

    foreach($arr as $item){
        $linkedlist->insert($item);
    }

    // echo '<pre>';
    // print_r($linkedlist);
    // echo '</pre>';
    $traverseLinkedList = $linkedlist->head;
    
    while($traverseLinkedList->next){
        $data = $traverseLinkedList->data;
        echo '<pre>';
        echo $data;
        echo '</pre>';
        $traverseLinkedList = $traverseLinkedList->next;
    }
    

    
    
?>