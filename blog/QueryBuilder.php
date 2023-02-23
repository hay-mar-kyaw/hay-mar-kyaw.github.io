<?php
    function select($table,$cols,$join,$where,$order,$conn){
        $sql="SELECT $cols FROM $table";
        if($join != null){
            $sql .=" $join";
        }

        if($where != null){
            $sql .=" WHERE $where";
        }

        if($order != null){
            $sql .=" ORDER BY $order";
        }
        //echo $sql;
        $stmt=$conn->prepare($sql);
        $stmt->execute();
        $results=$stmt->fetchAll();
        
        return $results;
    }

    function show($table,$cols,$join,$id,$conn){
        $sql="SELECT $cols FROM $table";
        if($join != null){
            $sql .=" $join";
        }
        if($id != null){
            $sql .=" WHERE posts.id=$id";
        }

        //echo $sql;
        $stmt=$conn->prepare($sql);
        $stmt->execute();
        $result=$stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }
    function delete($table,$id,$conn){
        $sql="DELETE FROM $table";
        if($id != null){
            $sql .= " WHERE posts.id=$id";
        }
        var_dump($sql);
        $stmt=$conn->prepare($sql);
        $stmt->execute();
        $result=$stmt->fetchAll();

        return $result;
    }
    // function update($table,$cols,$id,$conn){
    //     $sql = "UPDATE $table SET $cols";
    //     if($id)
    // }

    function store($table,$datas,$conn){
        // var_dump($table);
        // var_dump($datas);
        //var_dump(array_keys($datas));

        $column_names = implode(',',array_keys($datas));//implode array to string and array_keys is get onlu array key 
        $bind_values = implode(',:',array_keys($datas));
        $sql ="INSERT INTO $table($column_names) VALUES(:$bind_values)";
        $stmt=$conn->prepare($sql);
        foreach($datas as $key=> &$value){
        $stmt->bindParam(':'.$key,$value);
        }
        $stmt->execute();
    }

    
?>