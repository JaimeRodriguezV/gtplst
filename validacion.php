<?php $page = 'pedido'; require_once("header.php"); ?>
<?php
  error_reporting(E_ALL & ~E_NOTICE);
  session_start();
?>

<script>
doWait();
</script>


<form data-toggle="validator" role="form">
  <div class="form-group">
    <label for="inputName" class="control-label">Name</label>
    <input type="text" class="form-control" id="inputName" placeholder="Cina Saffary" required>
  </div>
  <div class="form-group has-feedback">
    <label for="inputTwitter" class="control-label">Twitter</label>
    <div class="input-group">
      <span class="input-group-addon">@</span>
      <input type="text" pattern="^[_A-z0-9]{1,}$" maxlength="15" class="form-control" id="inputTwitter" placeholder="1000hz" required>
    </div>
    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    <div class="help-block with-errors">Hey look, this one has feedback icons!</div>
  </div>
  <div class="form-group">
    <label for="inputEmail" class="control-label">Email</label>
    <input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
    <div class="help-block with-errors"></div>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="control-label">Password</label>
    <div class="form-group col-sm-6">
      <input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
      <div class="help-block">Minimum of 6 characters</div>
    </div>
    <div class="form-group col-sm-6">
      <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
      <div class="help-block with-errors"></div>
    </div>
    </div>
  </div>
  <div class="form-group">
    <div class="radio">
      <label>
        <input type="radio" name="underwear" required>
        Boxers
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="underwear" required>
        Briefs
      </label>
    </div>
  </div>
  <div class="form-group">
    <div class="checkbox">
      <label>
        <input type="checkbox" id="terms" data-error="Before you wreck yourself" required>
        Check yourself
      </label>
      <div class="help-block with-errors"></div>
    </div>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>


<script>
doUnWait();
</script>

<?php $page = 'pedido'; require_once("footer.php"); 

//var_dump($_SESSION['login']);
?>
