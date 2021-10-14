
<?= $this->view('catalog/header',$data);?>
<div style="margin:auto;width:100%;max-width:600px">
  <h1>Login</h1>
<form method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <input type="email" required name="email" class="form-control" placeholder="email">
  </div>
  <div class="form-group">
    <input type="password" required placeholder="password" name="password"  class="form-control" />
  </div>
 
  <input type="submit" name="submit" class="btn btn-primary" value="Submit"/>
</form>
</div>
<?= $this->view('catalog/footer');?>
 