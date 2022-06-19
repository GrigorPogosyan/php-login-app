<form class="w-100" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="hidden" name="action" value="login">
    <div class="form-group">
        <label for="userinput">Usuario</label>
        <input name="userinput" type="text" class="form-control" id="userinput" placeholder="Escribe tu usuario">
    </div>
    <div class="form-group">
        <label for="passinput">Password</label>
        <input name="passinput" type="password" class="form-control" id="passinput" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Entrar</button>
    
</form>