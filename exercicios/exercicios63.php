<?php

class BinarySearchTree
{
    public ?BinarySearchTree $left;
    public ?BinarySearchTree $right;
    public int $data;

    
    public function __construct(int $data){
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }

    public function insert(int $data)
    {   

        if($data <= $this->data){
            if($this->left === null){
                $this->left = new BinarySearchTree($data);
            } else {
                $this->left->insert($data);
            }
        }else{
            if($this->right === null){
                $this->right = new BinarySearchTree($data);
            }else{
                $this->right->insert($data);
            }
        }
    }

    public function getSortedData(): array
    {
        $result = [];

        if($this->left !== null){
            $result = array_merge($result, $this->left->getSortedData());
        }

        $result[] = $this->data;

        if($this->right !== null){            
            $result = array_merge($result, $this->right->getSortedData());
        }

        return $result;
    }
}
