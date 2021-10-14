
<?= $this->view('catalog/header',$data);?>
<div style="margin:auto;width:100%;max-width:600px">

<form method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <input type="text" name="title" class="form-control" placeholder="Image Title">
  </div>
  <div class="form-group">
    <input type="file" name="file"  class="form-control" />
  </div>

  <input type="submit" name="submit" class="btn btn-primary" value="Upload"/>
</form>
</div>
<?= $this->view('catalog/footer');?>
 