<?php
    //Node Class
    class Node{
        public $data;
        public $prev;
        public $next;

        function __construct($data)
        {
            $this->data = $data;
            $this->prev = null;
            $this->next = null;
        }
    }

    //Linked List Class
    class LinkedList{
        public $head;

        function __construct(){
            $this->head = null;
        }

        function insertatStart($data){
            $node = new Node($data);

            if(is_null($this->head)){
                $this->head = &$node;
            }
            else{
                $this->head->prev = &$node;
                $node->next = $this->head;
                $this->head = &$node;
            }
        }
        function insertatEnd($data){
            $node = new Node($data);
            $TraverseNode = $this->TraverseList();
            
            if(is_null($TraverseNode)){
                $this->head = &$node;
            }
            else{

                $node->prev = $TraverseNode;
                $TraverseNode->next = &$node;
                
            }
            
        }

        function insertafter($data,$after){
            $node = new Node($data);
            $TraverseNode = $this->TraverseListTillVal($after);
            
            if(is_null($TraverseNode)){
                $this->head = &$node;
            }
            else{
                
                $node->next = $TraverseNode->next;
                $node->prev = $TraverseNode;
                $TraverseNode->next = &$node;
                
            }
            
        }

        function TraverseList(){
            $currentNode = $this->head;
            while($currentNode && $currentNode->next){
                $currentNode = $currentNode->next;
            }
            return $currentNode;
        }

        function TraverseListTillVal($value){
            $currentNode = $this->head;
            while($currentNode && $currentNode->data != $value ){
                $currentNode = $currentNode->next;
            }
            return $currentNode;
        }
    }

    $LL = new LinkedList();
    $LL->insertafter(2,null);
    $LL->insertafter(3,2);
    $LL->insertafter(4,3);
    $LL->insertafter(5,2);
    // $LL->insertatEnd(4);
    // $LL->insertatEnd(5);
    
    echo '<pre>';
    print_r($LL);
?>