<?php
class DB {
    public function connect()
    {
        $con = new mysqli('localhost','root','','tesstMai');
        if ($con->connect_error) {
            echo 'Kết nối thất bai';
        }
        return $con; 
    }
}