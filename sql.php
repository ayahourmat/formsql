<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body
    {
    background-color: rgb(254, 174, 177);}
#tabl{
    margin-right: 10%;
    margin-left: 10%;
    margin-top: 5%;
    margin-bottom: 5%;
    background-color: white;
    border-radius: 5%;
    padding-left: 8%;
    
} 
table{
    width: 100%;
}
    </style>
</head>
<body>
    <div id="tabl"><br>
    <table>
        <th>
            <td> first name </td><td> last name </td><td> CIN </td><td> gender </td><td> email </td><td> user-password </td>
        </th>
        <tr>
        <td>
            </td>
            <td>
                <?= $_POST['fname'] ?><br>
            </td>
            <td>
                <?= $_POST['lname'] ?><br>
            </td>
            <td>
                <?= $_POST['cin'] ?><br>
            </td>
            <td>
                <?= $_POST['gender'] ?><br>
            </td>
            <td>
                <?= $_POST['mail'] ?><br>
            </td>
            <td>
                <?= $_POST['pwd'] ?><br>
            </td>
        </tr>
    </table>
</div>
</body>

</html>