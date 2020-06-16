<?php
require_once "TCO_SQL.php";
class SelectQuery extends TCO_SQL
{
    public function where($table,$type,$type_of_value){
        $query_str="SELECT * FROM $table WHERE $type = '{$type_of_value}'";
        $result = mysqli_query($this->db_con, $query_str);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<hr> <div class='text'>We have a  </div> ". "id: " . $row["id"]. " - Name: " . $row["name"]. " -Surname:" . $row["surname"]. " -gender:" . $row["gender"]."<br>";
            }
        }else {
            echo "<h1>Not found</h1>";
        }



    }

   public function andWhere($table,
                            $type,
                            $type_of_value,
                            $second_type,
                            $second_type_of_value
   ){

       $query="SELECT id,name,surname,gender FROM $table WHERE $type='{$type_of_value}' AND $second_type='{$second_type_of_value}'";
       $result=mysqli_query($this->db_con, $query);

       if ($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) {
               echo "<hr> <div class='text'>We have a  </div> ". "id: " . $row["id"]. " - Name: " . $row["name"]. " -Surname:" . $row["surname"]. " -gender:" . $row["gender"]."<br>";
           }
       }else {
           echo "<h1> Not found</h1>";
       }

   }

   public function orWhere(
       $table,
       $type,
       $type_of_value,
       $second_type,
       $second_type_of_value
   ){
       $query="SELECT id,name,surname,gender FROM $table WHERE $type= $type_of_value OR $second_type='{$second_type_of_value}'";
       $result=mysqli_query($this->db_con, $query);

       if ($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) {
               echo "id: " . $row["id"]. " - Name: " . $row["name"]. " -Surname:" . $row["surname"]. " -gender:" . $row["gender"]."<br> ";
           }
       }else {
           echo "<hr><h1> Not found</h1>";
       }

   }


     public function getUserData($number)
    {
        for ($i = strlen($number) ; $i > 0; $i--){
             if ($number >= 5){
              $number = substr($number, 0, -1);
            $query = "SELECT name FROM `phone_codes` WHERE dialCode = '{$number}'";
            $result=mysqli_query($this->db_con, $query);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo  $row["name"];
                    break;
                }
            }
          }
        }
    }


}
?>


