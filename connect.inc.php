<?php 

class Connect{

    public  bool $error = false;
    private  $conn;

    public function make_connection(){
        try
        {
            $this->conn = new mysqli('localhost', 'root','root', 'formation_school');
        }
        catch (Exception $e)
        {
                $this->error = true;
        }
    }

    public function get_connection(){
        return $this->conn;
    }
}

?>