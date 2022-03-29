<?php
//CLASS KONKESI DATABASE
class DBConn
{
    private $user = 'root';
    private $pass = '';
    public function connect()
    {
        try {
            $conn = new PDO('mysql:host=localhost;dbname=incareer', $this->user, $this->pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo 'DATABASE ERROR' . $e->getMessage();
        }
    }
}