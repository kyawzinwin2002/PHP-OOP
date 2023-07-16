<?php

class QueryBuilder{
   
   public $tableName,$where,$orWhere;

   function __construct($tableName)
   {
        $this->tableName = $tableName;
        $this->where = [];
        $this->orWhere = [];
   }

   public function where($column,$operator,$value){        
        $str = $column.$operator.$value;
        $this->where[] = $str;      
        
        return $this;
   }

   public function orWhere($column,$operator,$value){
    $str = $column.$operator.$value;
    $this->orWhere[] = $str;      
    
    return $this;
   }

   public function sql(){
        $sql = "SELECT * FROM ".$this->tableName;
        
        if(!empty($this->where)){
            $sql .= " WHERE ". join(" AND ",$this->where);            
        }

        if(!empty($this->orWhere)){
            $sql .= " OR ". join(" OR ",$this->orWhere);
        }

        $sql .= " ;";

        echo $sql;
   }
}