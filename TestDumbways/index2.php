<?php
  include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
    integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>PHP and MySQL CRUD</title>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#" target="_blank" >HOME</a>
      <ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link " href="index.php">COURSE</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="index2.php">CONTENT</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index3.php">AUTHOR</a>
  </li>
</ul>
    </div>
    
    
  </nav>
  <br><br><br>
  <div class="container">
    <div class="row">
      <div class="col-md-12 card">
        <div>
          <div class="head-title">
            <h4 class="text-center">TABLE CONTENT</h4>
            <hr>
          </div>
          <div class="col-md-3 float-left add-new-button">
            <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addModal">
              <i class="fas fa-plus"></i> Tambah Content
            </a>
          </div>
          <div class="col-md-3 float-left add-new-button">
            <a href="pdf.php" target="_blank" class="btn btn-success btn-block">
              <i class="fas fa-print"></i> Print
            </a>
          </div>
          <br><br><br>
          <table class="table table-striped">
            <thead class="bg-secondary text-white">
              <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Video_link</th>
                <th>Type</th>
                <th>id_course</th>
                <th>View</th>
                <th>Update</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>

            <?php

              $sql = "SELECT * FROM content";
              $result = mysqli_query($conn, $sql);

            if($result)
            {
              while($row = mysqli_fetch_assoc($result)){
            ?>
              <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['video_link']; ?></td>
                <td><?php echo $row['type']; ?></td>
                <td><?php echo $row['id_course']; ?></td>
                <td>
                  <button type="button" class="btn btn-info viewBtn"> <i class="fas fa-eye"></i> Lihat </button>
                </td>
                <td>
                  <button type="button" class="btn btn-warning updateBtn"> <i class="fas fa-edit"></i> Ubah </button>
                </td>
                <td>
                  <button type="button" class="btn btn-danger deleteBtn"> <i class="fas fa-trash-alt"></i> Hapus </button>
                </td>
              </tr>
            <?php
              }
            }else{
              echo "<script> alert('No Record Found');</script>";
            }
          ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- MODALS -->

  <!-- ADD RECORD MODAL -->
  <div class="modal fade" id="addModal">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title">Tambah Data Content</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="insertcontent.php" method="POST">
            <div class="form-group">
              <label for="title">Nama</label>
              <input type="text" name="nama" class="form-control" placeholder="Masukan Nama " maxlength="50"
                required>
            </div>
            <div class="form-group">
              <label for="title">Video_link</label>
              <input type="text" name="video_link" class="form-control" placeholder="Masukan Video_link" maxlength="50"
                required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Type</label>
              <select class="form-control" name="type" id="Type">
              <option>.MP4</option>
              <option>.webm</option>
              <option>.mkv</option>
              <option>.flv</option>
              </select>
            </div>
            <div class="form-group">
              <label for="title">id_course</label>
              <input type="text" name="id_course" class="form-control" placeholder="Masukan id_course" maxlength="50" required>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary" name="insertData">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- VIEW MODAL -->
  <div class="modal fade" id="viewModal">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header bg-info text-white">
          <h5 class="modal-title">View Information</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-5 col-xs-6 tital " >
              <strong>Nama:</strong>
            </div>
            <div class="col-sm-7 col-xs-6 ">
              <div id="viewnama_depan"></div>
            </div>
            <div class="col-sm-5 col-xs-6 tital " >
              <strong>Video_link:</strong>
            </div>
            <div class="col-sm-7 col-xs-6 ">
              <div id="viewnama_belakang"></div>
            </div>
            <div class="col-sm-5 col-xs-6 tital " >
              <strong>Type:</strong>
            </div>
            <div class="col-sm-7 col-xs-6 ">
              <div id="viewalamat"></div>
            </div>
            <div class="col-sm-5 col-xs-6 tital " >
              <strong>id_course:</strong>
            </div>
            <div class="col-sm-7 col-xs-6 ">
              <div id="viewSkill"></div>
            </div>
                     
          </div>
          <br>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
          </div>
        </div>
        </div>
    </div>
  </div>

  <!-- UPDATE MODAL -->
  <div class="modal fade" id="updateModal">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header bg-warning text-white">
          <h5 class="modal-title">Edit Data</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="updatecontent.php" method="POST">
            <input type="hidden" name="updateId" id="updateId">
            <div class="form-group">
              <label for="title">Nama</label>
              <input type="text" name="updatenama_depan" id="updatenama_depan" class="form-control" placeholder="Enter first name" maxlength="50"
                required>
            </div>
            <div class="form-group">
              <label for="title">Video_link</label>
              <input type="text" name="updatenama_belakang" id="updatenama_belakang" class="form-control" placeholder="Enter last name" maxlength="50"
                required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Type</label>
              <select class="form-control" name="type" id="Type">
              <option>.MP4</option>
              <option>.webm</option>
              <option>.mkv</option>
              <option>.flv</option>
              </select>
            </div>
            <div class="form-group">
              <label for="title">id_course</label>
              <input type="text" name="updateSkill" id="updateSkill" class="form-control" placeholder="Enter skills" maxlength="50" required>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary" name="updateData">Simpan Perubahan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- DELETE MODAL -->
  <div class="modal fade" id="deleteModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-danger text-white">
          <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="deletecontent.php" method="POST">

          <div class="modal-body">

            <input type="hidden" name="deleteId" id="deleteId">

            <h4>Anda Ingin Menghapus?</h4>

          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          <button type="submit" class="btn btn-primary" name="deleteData">Yes</button>
        </div>

        </form>
      </div>
    </div>
  </div>

  <script src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
    integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
  <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>

  <script>
    $(document).ready(function () {
      $('.updateBtn').on('click', function(){

        $('#updateModal').modal('show');

        // Get the table row data.
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        console.log(data);

        $('#updateId').val(data[0]);
        $('#updatenama_depan').val(data[1]);
        $('#updatenama_belakang').val(data[2]);
        $('#updatealamat').val(data[3]);
        $('#updateSkill').val(data[4]);
        $('#updateposisi').val(data[5]);      

        });
        
    });
  </script>

  <script>
    $(document).ready(function () {
      $('.viewBtn').on('click', function(){

        $('#viewModal').modal('show');

        // Get the table row data.
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        console.log(data);

        $('#viewnama_depan').text(data[1]);
        $('#viewnama_belakang').text(data[2]);
        $('#viewalamat').text(data[3]);
        $('#viewSkill').text(data[4]);
        $('#viewposisi').text(data[5]);      

        });
    
    });
  </script>

  <script>
    $(document).ready(function () {
      $('.deleteBtn').on('click', function(){

        $('#deleteModal').modal('show');
        
        // Get the table row data.
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        console.log(data);

        $('#deleteId').val(data[0]);

        });
    
    });
  </script>
</body>

</html> 