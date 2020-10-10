<?php

    // Insert the content of connection.php file
    include('koneksi.php');

    // Update data into the database
    if(ISSET($_POST['updateData']))
    {   
        
        $nama               = $_POST['updatenama'];
        $updatethumbnail    = $_POST['updatethumbnail'];
        $updateid_author    = $_POST['updateid_author'];
        $updateduration     = $_POST['updateduration'];
        $updatedescription  = $_POST['updatedescription'];

        $sql = "UPDATE course SET   nama        ='$nama',
                                    thumbnail   ='$updatethumbnail', 
                                    author      ='$updateid_author t',
                                    duration    ='$updateduration',
                                    description ='$updatedescription'
                                    WHERE id    ='$id'";

        $result = mysqli_query($conn, $sql);

        if($result)
        {
            echo '<script> alert("Data Updated Successfully."); </script>';
            header("Location:index.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>