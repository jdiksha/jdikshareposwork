<h1>User List</h1>

<table border="1">
    <tr>
        <td>NAME</td>
        <td>EMAIL</td>
        <td>PASSWORD</td>
        <td>AGE</td>
        <td>GENDER</td>
        <td>USERNO</td>
</tr>
@foreach($userlist as $userli)
<tr>
        <td>{{$userli['name']}}</td>
        <td>{{$userli['email']}}</td>
        <td>{{$userli['password']}}</td>
        <td>{{$userli['age']}}</td>
        <td>{{$userli['gender']}}</td>
        <td>{{$userli['userno']}}</td>
@endforeach
</table>