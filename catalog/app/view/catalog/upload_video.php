
<?= $this->view('catalog/header',$data);?>
<div style="margin:auto;width:100%;max-width:600px">

<form method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Image Title">
  </div>
  <div class="form-group">
    <input type="file" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary">Upload</button>
</form>
</div>
<?= $this->view('catalog/footer');?>
 