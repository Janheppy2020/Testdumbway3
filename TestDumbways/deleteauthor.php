<?php

    // Insert the content of connection.php file
    include('koneksi.php');
    
    // Delete data from the database
    if(ISSET($_POST['deleteData']))
    {
        $id = $_POST['deleteId']; 

        $sql = "DELETE FROM athor WHERE id='$id'";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo '<script> alert("Data Deleted."); </script>';
            header('Location: index3.php');
        }else{
            echo '<script> alert("Data Not Deleted."); </script>';
        }
    }
?>