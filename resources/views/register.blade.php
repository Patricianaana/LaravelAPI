<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    {{-- @include('header') --}}
    <div class="contaier-fluid">
        <div>
            <h3 style="text-align: center">Register User</h3>
        </div>
        <div>
                <div class="container">
                    <form action="class" method="POST">
                        @csrf
                        <div>
                            <label>User name</label><br>
                            <input type="text" name="user_name" placeholder="Enter user name here"><br>
                            @error('user_name')
                            <span style="color: red">
                                {{ $message }}
                            </span>
                            @enderror
                           </div>
                       <div>
                        <label>Email</label><br>
                        <input type="text" name="email" placeholder="Enter email here"><br>
                        @error('email')
                        <span style="color: red">
                            {{ $message }}
                        </span>
                        @enderror
                       </div>
                       <div>
                        <label>Password</label><br>
                        <input type="password" name="password" placeholder="Enter password here"><br>
                        @error('password')
                        <span style="color: red">
                            {{ $message }}
                        </span>
                        @enderror
                       </div>
                       <div>
                        <label>Confirm Password</label><br>
                        <input type="password" name="confirm_password" placeholder="Enter password again for confirmation"><br>
                        @error('confirm_password')
                        <span style="color: red">
                            {{ $message }}
                        </span>
                        @enderror
                       </div>
                       <div class="mt-3">
                        <button type="submit" class="btn btn-success">Sign Up</button>
                        <a href="/" class="btn btn-outline-danger">Cancel</a>
                       </div>
            </form>
        </div>
    </div>
    
    {{-- @include('footer') --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>