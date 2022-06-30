<p class="h1 text-center">Register</p>
<br>
<form class="w-100" method="POST">
    <input type="hidden" name="action" value="signup">
    <div class="row">
        <div class="form-group col-sm">
            <label for="name">Nombre</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="ej: Juan" required>
        </div>
        <div class="form-group col-sm">
            <label for="surname">Apellidos</label>
            <input name="surname" type="text" class="form-control" id="surname" placeholder="ej: Pérez" required>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm">
            <label for="name">Email</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="ej: juan@gmail.com" required>
        </div>
        <div class="form-group col-sm">
            <label for="userinput">Usuario</label>
            <input name="userinput" type="text" class="form-control" id="userinput" placeholder="ej: juan23" required>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm">
            <label for="passinput">Password</label>
            <input name="passinput" type="password" class="form-control" id="passinput" placeholder="Password" required>
        </div>
        <div class="form-group col-sm">
            <label for="repassinput">Confirmar Password</label>
            <input name="repassinput" type="password" class="form-control" id="repassinput" placeholder="Password" required>
        </div>
    </div>
    <div class="col text-center">
    <button id="form-submit-js" type="submit" class="btn btn-primary w-100">Registrarse</button>
    <small class="s-1 w-100">Ya tienes una cuenta? <span id="href-signin" class="text-primary">Iniciar Sesión</span></small>
    </div>

</form>
<script type="text/javascript" src="js/login-form-signin.js"></script>