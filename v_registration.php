<!DOCTYPE HTML>
<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/v_registration.css"> 
    </head> 
    <body>
        <div class="container">
          <h1>Registration First!</h1>
            <form>
            <tr>
        	<td>Nama</td><td>:</td><td><input type="text" name="nama" /></td>
        </tr>
        <tr>
        	<td>Email</td><td>:</td><td><input type="text" name="email" /></td>
        </tr>
        <tr>
        	<td>Username</td><td>:</td><td><input type="text" name="username" /></td>
        </tr>
        <tr>
        	<td>Password</td><td>:</td><td><input type="password" name="password" /></td>
        </tr>
        <tr>
        	<td>Repeat Password</td><td>:</td><td><input type="password" name="password2" /></td>
        </tr>
        <tr>
        	<td></td><td></td><td><input type="submit" name="registration" value="Registration" /></td>
        </tr>
            </form>
        </div>     
    </body>
</html>