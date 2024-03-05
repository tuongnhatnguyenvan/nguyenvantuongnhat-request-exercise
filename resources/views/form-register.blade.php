<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Request</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-Gd2/fQVfFyZ4FZ+v4jO77tDgBCfEQoPe0BTDJtdc8FC/IB7Rrx0oFTxhFdoOul+0Lw9hEmmbzKeIzSqk0pohbw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <form action="" method="POST">
        @csrf
        <div style="display: flex; padding-right: 100px;">
            <div>
                <label for="name">Name</label><br>
                <label for="username">Username</label><br>
                <label for="password">Password</label>
            </div>
    
            <div style="padding-left: 20px;">
                <input type="text" name="name" id="name" placeholder="Enter your name"><br>
                <input type="text" name="username" id="username" placeholder="Enter your username"><br>
                <input type="password" name="password" id="password" placeholder="Enter your password"><br>
                <button type="submit" style="margin: 3px">Submit</button>
            </div>

            <div>
                <p style="margin:3px">Name : {{ $name }}</p>
                <p style="margin:3px">Username : {{$username}}</p> 
                <p style="margin:3px">Password : {{ $password }}</p>
            </div>

        </div>

    </form>
</body>
</html>

