<h1>Add Members</h1>
<form action="add" method="POST">
@csrf
<input type="text" name="username" placeholder="Enter the name"/> <br> <br>
<input type="text" name="compname" placeholder="Enter the comp name"/> <br> <br>
<input type="text" name="address" placeholder="Enter the address"/> <br> <br>
<button type="submit">Add Member</button>
</form>