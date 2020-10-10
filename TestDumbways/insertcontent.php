<?php

    // Insert the content of connection.php file
    include('koneksi.php');
    
    // Insert data into the database
    if(ISSET($_POST['insertData']))
    {
        
        $nama           = $_POST['nama'];
        $videolink      = $_POST['video_link'];
        $type           = $_POST['type'];
        $course         = $_POST['id_course'];

        $sql = "INSERT INTO content (nama, video_link, type, id_course) VALUES('$nama', '$videolink', '$type', '$course')";       
        $result = mysqli_query($conn, $sql);

        if($result){
            echo '<script> alert("Data saved."); </script>';
            header('Location: index2.php');
        }else{
            echo '<script> alert("Data Not saved."); </script>';
        }
    }
?>