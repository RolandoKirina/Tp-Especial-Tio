    {include 'templates/header.tpl'}
        <div class="container">
            <form action="verify" method="POST" class="col-md-4 offset-md-4 mt-4">
                <h1 class="h1">Iniciar Sesion</h1>
                
                <div class="form-group">
                <label class="label">Ingrese su email: </label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                <label class="label">Ingrese su contraseña: </label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="center">
                <button type="submit"class="btn btn-light">Ingresar</button>
                </div>
            </form>

            {if $error}
                <div class="alert alert-danger" role="alert">
                    {$error}
                </div>
            {/if}

        </div>
