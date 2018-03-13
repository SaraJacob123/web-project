<?php

class db {

    public $host = "localhost";
    public $user = "root";
    public $password = "";
    public $databse = "blogger";
    public $con;

    /* public $host = "50.62.209.74";
      public $user = "cdoadmin";
      public $password = "admin@cdo.com";
      public $databse = "cdopro";
      public $con; */

    public function Connect() {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->databse);

        if (mysqli_errno($this->con)) {
            echo 'Error: ' . mysqli_connect_error();
            exit();
        }
    }

    public function Disconnect() {
        mysqli_close($this->con);
    }

    /**
     * ExecuteQuery function
     * @param string $sql Proivde your sql statements here.
     * @param int $type 1:Select, 2:Insert, 3:Update
     * @return boolean
     */
    public function ExecuteQuery($sql, $type =1) {
        $returnData;
        try {
            $sql = str_replace("''", "null", $sql);
            $this->Connect();
            //$sql = mysqli_escape_string($this->con, $sql);
            $data = mysqli_query($this->con, $sql);

            if ($type == 1) {
                $returnData = $data;
            }
            if ($type == 2) {
                $returnData = mysqli_insert_id($this->con);
            }
            if ($type == 3) {
                $returnData = mysqli_affected_rows($this->con);
            }
			

            $this->Disconnect();
        } catch (Exception $exe) {
            $returnData = FALSE;
        }
        return $returnData;
    }

}