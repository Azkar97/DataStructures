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
                //$TraverseNode->prev = $TraverseNode;
                $node->prev = $TraverseNode;
                $TraverseNode->next = &$node;
                
                //$TraverseNode->prev = $this->head;
                //$this->head->next = $TraverseNode;
            }
            
        }

        function TraverseList(){
            $currentNode = $this->head;
            while($currentNode && $currentNode->next){
                $currentNode = $currentNode->next;
            }
            return $currentNode;
        }
    }

    $LL = new LinkedList();
    $LL->insertatEnd(2);
    $LL->insertatEnd(3);
    $LL->insertatEnd(4);
    $LL->insertatEnd(5);
    
    echo '<pre>';
    print_r($LL);
?>