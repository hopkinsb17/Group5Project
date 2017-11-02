<?php
    require_once('SQL.php');
    $sql = new SQL;
    $sql->Execute("DoctorRanking",array());
    $sql->GetTable();
    $sql->CloseConnection();
?>
