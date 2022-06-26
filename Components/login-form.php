<p class="h1 text-center">Login</p>
<br>
<form class="w-100" method="POST" id="form">
    <input type="hidden" name="action" value="login">
    <div class="form-group">
        <label for="userinput">Usuario</label>
        <input name="userinput" type="text" class="form-control" id="userinput" placeholder="Usuario" required>
    </div>
    <div class="form-group">
        <label for="passinput">Password</label>
        <input id="passinput-js" name="passinput" type="password" class="form-control" id="passinput" placeholder="Password" required>
    </div>
    <button id="form-submit-js" type="submit" class="btn btn-primary w-100">Entrar</button>
    <div>
        <small class="s-1">No estás registrado? <span id="href-signup" class="text-primary">Crear una cuenta</span></small>
    </div>
</form>
<script type="text/javascript" src="js/login-form-submit.js"></script>
<script type="text/javascript" src="js/login-form-signup.js"></script>