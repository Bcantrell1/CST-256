@extends('layouts.appmaster')
@section('title', 'Login Page')
@section('content')


<?php
    if($errors->count() != 0)
    {
        echo "<h3>Errors:</h3>";
        foreach($errors->all() as $message)
        {
            echo $message . "<br/>";
        }
    }
?>
<form action = "/Activity3/dologin3" method = "POST">
	<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
	<table>
		<tr>

			<td>Username: </td>
			<td><input type = "text" name = "username" /></td>
		</tr>

		<tr>

			<td>Password:</td>
			<td><input type = "text" name = "password" /></td>
		</tr>
		<tr>
			<td colspan = "2" align = "center">
				<input type = "submit" value = "Login" />
			</td>
	</table>
</form>
@endsection