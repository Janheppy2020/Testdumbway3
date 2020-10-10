<?php

    // Insert the content of connection.php file
    include('koneksi.php');

    // Update data into the database
    if(ISSET($_POST['updateData']))
    {   
        
        $nama           = $_POST['updatenama'];
        $videolink      = $_POST['updatevideo_link'];
        $type           = $_POST['updatetype'];
        $id_course      = $_POST['updateid_course'];

        $sql = "UPDATE content SET  nama        ='$nama',
                                    thumbnail   ='$videolink', 
                                    author      ='$type',
                                    duration    ='$id_course',
                                    WHERE id    ='$id'";

        $result = mysqli_query($conn, $sql);

        if($result)
        {
            echo '<script> alert("Data Updated Successfully."); </script>';
            header("Location:index2.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>