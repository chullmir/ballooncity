
<?php 
require_once 'autoload.php';
if ($auth->isLogged()) {
  // header('location:profile.php');
}
$pageTitle = 'Sign In';
require_once 'partials/head.php';
$LoginData = new LoginFormValidator($_POST);
if ($_POST) {
  if ($LoginData->isValid()) {
    $user = $db->getUserByEmail($_POST['email']);
    if(!$user) {
      $LoginData->addError('email', 'El email ingresado no existe');
    } elseif (!password_verify($_POST['password'],$user->getPassword())) {
      $LoginData->addError('password', 'La contraseña es incorrecta');
    } else {
      if (isset($_POST['rememberUser'])) {
        setcookie('rememberUser',$_POST['email'],time()+3600);
      }
      $auth->logIn($user->getEmail());
    }
  }
}
require_once 'partials/header.php';




?>
<body>
  <div class="container signjoin">
    

    <div class="col-12 d-flex justify-content-between align-items-center">
      <h4>Ingresar</h4>
      <!-- <small><a href="#">Olvidaste tu contraseña?</a></small> -->
    </div>

    <div class="col-12">
      <form class="form-group" method="post">
        <input 
        type="text" 
        class="form-control form-email <?php echo($LoginData->fieldHasError('email') ? 'is-invalid' : ''); ?>"
        name="email" 
        placeholder="Email" 
        id="email" 
        value="<?= $LoginData->getEmail(); ?>">
        <?php if($LoginData->fieldHasError('email')): ?>
          <div class="invalid-feedback">
            <?= $LoginData->getFieldErrors('email') ?>
          </div>
        <?php endif; ?>
        <input 
        type="password" 
        class="form-control form-password <?php echo($LoginData->fieldHasError('password') ? 'is-invalid' : ''); ?>" 
        name="password" 
        placeholder="Contraseña"  
        id="password">
        <?php if ($LoginData->fieldHasError('password')): ?>
          <div class="invalid-feedback">
            <?= $LoginData->getFieldErrors('password') ?>
          </div>
        <?php endif ?>
        <div class="form-check d-flex">
          <label for="rememberUser">Mantenerme conectado</label>
          <input type="checkbox" name="rememberUser" id="rememberUser" class="form-check-input">
        </div>
        <button type="submit" class="btn btn-info btn-block">Ingresar</button>
      </form>
    </div>
    <div class="col-12">
      <h5><a href="register.php">Registrarse</a></h5>
    </div>
    
  </div>
</body>


<?php require_once("partials/footer.php") ?>
