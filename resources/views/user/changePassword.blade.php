<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<h1>Edit</h1>

	<form method="post" >
		<!-- @csrf -->

		<!-- {{csrf_field()}} -->

		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<table>
			<tr>
				<td>Username</td>
				<td>{{ $user->username }}</td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password"  name="password" value="{{$user->password}}"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
				<td></td>
			</tr>
		</table>
	</form>

	<div>
		{{session('msg')}}
	</div>

</body>
</html>