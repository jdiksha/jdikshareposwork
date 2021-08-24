<title>Registration Page</title>
<h1><center>Registration Page</center></h1>
<form action="store-user" method="POST">
    @csrf
    <center>
    <label> Name: </label>
    <input type="text" name="name" placeholder="Enter name"/><br><br>
    <label> Email-id: </label>
    <input type="text" name="email" placeholder="Enter user id"/><br><br>
    <label> Password: </label>
    <input type="password" name="password" placeholder="Enter user password"/><br><br>
    <label> Age: </label>
    <input type="text" name="age" placeholder="Enter age"/><br><br>
    <label> Gender: </label>
    <input type="text" name="gender" placeholder="Enter gender" /> <br><br>
    <label> Phone No: </label>
    <input type="tel" name="phone" placeholder="Enter phone no"/><br><br>
    <button type="submit">Submit</button>
</form>



