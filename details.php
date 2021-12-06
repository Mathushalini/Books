<?php
class dbcon{
    private $host = "localhost";
    private $username ="root";
    private $password ="";
    private $dbName ="bookorder";

    protected function dbconnect() {
        $dsn = 'mysql:host=' . $this -> host . ';dbname=' . $this -> dbName;
        $pdo = new PDO($dsn, $this -> username, $this -> password);
        $pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }

}
class Dbaction extends dbcon{
    public function getAlldata(){

        $sql = "SELECT * FROM bouquet";

        $result = $this -> dbconnect() -> query($sql);
        
        echo " <div class='col-md-9' >
                <table class='table table-striped table-hover table-responsive'>
                

                <tr> 
                    <th>No</th>
                    <th>name</th>
                    <th>telephoneno</th>
                    <th>address</th>
                    <th>ordername</th>
                   
                </tr>

        ";

        while($row = $result ->fetch()){
            $id = $row['id'];

            echo "
            <tr>
                <td>" . $row['id'] . " </td>
                <td>" . $row['names'] . " </td>
                <td>" . $row['telephoneno'] . " </td>
                <td>" . $row['addresses'] . " </td>
                <td>" . $row['ordername'] . " </td>
                  
               
            </tr>


        ";
    }
echo "</div></table>";



}
}
s