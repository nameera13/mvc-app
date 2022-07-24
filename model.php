<?php

    class model
    {
        public $conn="";
        public function __construct()
        {
            try
            {
                $this->conn=new mysqli("localhost","root","","mvc");
            }
            catch(Exception $e)
            {
                die(mysqli_error($this->conn,$e));
            }
        }
        

        public function selectalldata($table)
        {
            $select="select * from $table";
            $exe=mysqli_query($this->conn,$select);
            
            while($fetch=mysqli_fetch_array($exe))
            {
                $arr[]=$fetch;
            }
            return $arr;
        }

    }

?>