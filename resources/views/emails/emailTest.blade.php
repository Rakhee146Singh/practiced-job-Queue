<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>

<body>
    {{-- <h1>Email</h1>
    <p>Name: {{ $emailData['name'] }}</p>
    <p> DOB: {{ $emailData['dob'] }}</p> --}}
    {{-- <table border="1">
        <tr>
            <td> Name:</td>
            <td> {{ $emailData['name'] }} </td>
        </tr>
        <tr>
            <td> DOB: </td>
            <td> {{ $emailData['dob'] }}</td>
        </tr>
    </table> --}}
    <table border="1">
        <tr>
            <td>Title:</td>
            <td> {{ $post['title'] }} </td>
        </tr>
        <tr>
            <td> Content: </td>
            <td> {{ $post['author'] }}</td>
        </tr>
    </table>
</body>

</html>
