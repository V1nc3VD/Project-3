<div class="container">
    <div class="row">
        <div class="col-md-8 registreerform">
            <h3 class="registreren text-center">Registreren</h2>
            <hr>
            <form action="./phpscripts/register_script" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Je email address</label>
                    <input type="email" class="form-control registreerinput" id="email" name="email" aria-describedby="email" placeholder="">
                    <label>Nickname</label>
                    <input type="text" class="form-control registreerinput" id="nickname" name="nickname" aria-describedby="nickname" placeholder="">
                    
                    <label>Kies een goed wachtwoord</label>
                    <input type="password" class="form-control registreerinput" id="password" name="password" aria-describedby="password" placeholder="">
                    <label>Hetzelfde wachtwoord</label>
                    <input type="password" class="form-control registreerinput" id="password-verify" name="password-verify" aria-describedby="password" placeholder="">
                    
                    <button type="submit" class="btn btn-primary submitregister" >Submit</button>
            </form>
        </div>
</div>

