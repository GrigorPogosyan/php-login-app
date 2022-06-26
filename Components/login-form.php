<p class="h1 text-center">Login</p>
<br>
<form class="w-100" method="POST" id="form">
    <input type="hidden" name="action" value="login">
    <div class="form-group">
        <label for="userinput">Usuario</label>
        <input name="userinput" type="text" class="form-control" id="userinput" placeholder="Escribe tu usuario" required>
    </div>
    <div class="form-group">
        <label for="passinput">Password</label>
        <input id="passinput-js" name="passinput" type="password" class="form-control" id="passinput" placeholder="Password" required>
    </div>
    <button id="form-submit-js" type="submit" class="btn btn-primary">Entrar</button>

</form>