<?php

class Strain
{
    

    public function keep(array $list, callable $predicate): array
    {
        $result = [];

        if(empty($list)){
            return [];
        }

       foreach($list as $key){
        if($predicate($key)){
            $result[] = $key;
        }
       }

       return $result;
    }

    public function discard(array $list, callable $predicate): array
    {   
        
        $result = [];   
             
        if(empty($list)){
            return [];
        }

        foreach($list as $key){
        if(!$predicate($key)){
            $result[] = $key;
        }
       }

       return $result;
    }
    
}