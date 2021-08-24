<h1>User login</h1>
<form action="user1" method="POST">
    @csrf
    {{method_field('PUT')}}
    <input type="text" name="username" placeholder="Enter user name" /> <br> <br>
    <input type="password" name="password" placeholder="Enter user password" /><br><br>
    <button type="submit">Login</button>
</form>