<?php

$conn = mysqli_connect("localhost", "root", "","latihan3");

function query($query){
    global $conn;
    $result= mysqli_query($conn, $query);

    if (mysqli_num_rows($result) ==1){
        return mysqli_fetch_assoc($result);
    }

    $rows=[];
    while ($row =mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}
?>