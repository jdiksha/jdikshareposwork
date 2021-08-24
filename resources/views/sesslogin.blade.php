<h1>User Login</h1>
<form action="sess" method="POST">
@csrf
<input type="text" name="username" placeholder="Enter the id"/> <br> <br>
<input type="password" name="userpass" placeholder="Enter the the password"/> <br> <br>
<button type="submit">Login</button>
</form>
