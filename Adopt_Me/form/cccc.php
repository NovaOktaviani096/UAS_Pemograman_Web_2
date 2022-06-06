<?php require('../admin/Model1.php');
if (isset($_GET['id_kategori'])) {
    editkategori();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>belajar membuat form login menggunakan modal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Tambah Data</button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Kategori</h4>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="" class="form-horizontal">
                
              <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Kategori</label>
                  <div class="col-sm-10">
                  <input type="email" class="form-control" name="email" requered ></div>
            </div>
            <div class="form-group">
            <label class="col-sm-2"></label>
                  <div class="col-sm-10">
                    <a href="">lupa password ?</a>
                  </div>
            </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" name="s"class="btn btn-primary">Tambah</button>
                  </div>
                     </form>
                </div>
              </div>
            </div>
            </div>
            <!-- Modal -->
</div>

</body>
</html> 