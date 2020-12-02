<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome! ^-^</title>
    <link rel="stylesheet" href="">
</head>

<body>
    @section ('formulario')
    <main>
    <form action="{{action('proyecto@verificar')}}" method = "POST">
        {{csrf_field()}}
        <label for="user">User:</label>
        <input type="text" name = "user">
        <br>
        <label for="pass">Password:</label>
        <input type="password" name = "pass">
        <br>
       
        <input type="submit" value = "Submit data">
    </form>
    </main>
    @show
</body>

</html>