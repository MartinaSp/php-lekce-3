
<form method="POST">

  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input name = "name" type="name" class="form-control" id="exampleName" aria-describedby="nameHelp" placeholder="Enter first name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">I agree</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>


<?php
echo '<br>POST: ';
var_dump($_POST);