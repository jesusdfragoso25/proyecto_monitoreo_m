<?php
     class user extends database{
            public function getuser($usern, $password){
                $sql = "SELECT * FROM usuario WHERE usern = '$usern' AND $password = '$password'";
                $result = $this ->connect()->query($sql); // recibe la variable
                $numRows = $result->num_rows; //retorna cantidad de filas en la consulta

                if ($numRows == 1){
                return true;
                }
                return false;
            }
     }