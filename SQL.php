<?php

/**
 * This is a class that will allow us to connect to the DB and run queries
 * @version 1.0
 * @author paulus_d
 */
class SQL
{
    private $hostname = "Localhost";
    private $database = "id3361169_clinical_master";
    private $username = "id3361169_webuser";
    private $password = "Group";
    public $table;
    
    private $doctorRanking = "select * from id3361169_clinical_master.Doctors";

    //public function __construct(){

    //}

    function Execute($procedure, $parameters){
        
        $sql = $this->GetProcedure($procedure, $parameters);
        //printf($sql);
        $link = $this->MakeConnection();

        /* check connection */
        if (mysqli_connect_errno()) {
             printf("Connect failed: %s\n", mysqli_connect_error());
                exit();
            }
        /* Select queries return a resultset */
        $this->table = mysqli_query($link, $sql);
    }
    
    function MakeConnection(){
        return mysqli_connect($this->hostname, $this->username, $this->password);
    }
    
    //Gets the rows
    function GetRows(){
        return mysqli_fetch_all($this->table,MYSQLI_NUM);
    }
    
    //Gets the columns    
    function GetColumns(){
        return mysqli_fetch_fields($this->table);
    }
    
    //forms the procedure to run
    function GetProcedure($procedure, $parameter){
        $sql = "";
        switch($procedure){
            case "DoctorRanking":
                $sql = $this->doctorRanking;
                break;
        }
        return $sql;
    }
    
    /* free result set */  
    function CloseConnection(){
        mysqli_free_result($result);
    }
    
    function GetTable(){
       echo "<table id=\"dataTable\">";
        echo  "<tr>";
        $fields = $this->GetColumns();
        $FieldCount = 0;
        foreach ($fields as $val)
            {
            echo "<th>";
            echo $val->name;
            echo "</th>";
            $FieldCount++;
            }
        
        $RowArray = $this->GetRows();
        foreach ($RowArray as $row)
            {
                echo "<tr>";
                    for($j=0;$j<$FieldCount;$j++){
                        echo "<td>";
                        echo $row[$j];
                        echo "</td>";
                }
                echo "</tr>";
            }
        echo "</tr>";
    echo "</table>";
    }
}
?>