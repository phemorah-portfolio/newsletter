<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Newsletter</title>

        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                background: linear-gradient(45deg,#2e343b,#2e343b)
            }
            .card{
                color:#fff;
                width: 400px;
                padding: 80px 50px;
                position: relative;
                border-radius: 20px;
                box-shadow: 0 5px 25px rgba(0,0,0,0.2);
                background: linear-gradient(45deg,#23282d,#23282d);
            }
            .card h3{
                color: #fff;
                margin-bottom: 20px;
                border-left: 5px solid red;
                padding-left: 10px;
                line-height: 1em
            }
            .inputbox{
                margin-bottom: 50px
            }
            .inputbox input{
                /* position:absolute; */
                /* width: 300px; */
                background:transparent
            }
            .inputbox input:focus{
                color: #495057;
                background-color: #fff;
                border-color: #e54b38;
                outline: 0;box-shadow: none
            }
            .inputbox span{
                position: relative;
                top: -30px;
                left: 1px;
                padding-left: 10px;
                display: inline-block;
                transition: 0.5s
            }
            .inputbox input:focus ~ span{
                transform: translateX(-10px) translateY(-32px);
                font-size: 12px
            }
            .inputbox input:valid ~ span{
                transform: translateX(-10px) translateY(-32px);
                font-size: 12px
            }

        </style>
    </head>
    <body class="antialiased">
        <!-- <div class="container"> -->
            <!-- <h1>Sign up for newsletter</h1> -->
<!--
            <form action="{{ url('/api/subscribers') }}" method="post">@csrf
                @if(Session::has('error'))
                <p class="alert alert-danger">{{ Session::get('error') }}</p>
                @endif
                @if(Session::has('success'))
                <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif -->
                <!-- <div class="form-group">
                <label for="firstname">First Name:</label>
                <input type="text" class="form-control" id="firstname" placeholder="Enter your first name" name="firstname" required>
                </div>
                <div class="form-group">
                <label for="lastname">Last Name:</label>
                <input type="text" class="form-control" id="lastname" placeholder="Enter your last name" name="lastname" required>
                </div>
                <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required>
                </div> -->
                <!-- <button type="submit" class="btn btn-default">Submit</button> -->
            <!-- </form>
        </div> -->

        <div class="card">
            <h3>Join Our Newsletter</h3>
            <p>Signup to receive the latest updates directly from the app</p>
            <form action="{{ url('/api/subscribers') }}" method="post">@csrf
                @if(Session::has('error'))
                <p class="alert alert-danger">{{ Session::get('error') }}</p>
                @endif
                @if(Session::has('success'))
                <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif
            <div class="row">
                <div class="col-md-6 inputbox">
                   <input type="text" name="firstname" class="form-control" required="required">
                   <span>First Name</span>
                </div>
                <div class="col-md-6 inputbox">
                   <input type="text" name="lasttname" class="form-control" required="required">
                   <span>Last Name</span>
                </div>
            </div>
             <div class="inputbox">
                <input type="text" name="name" class="form-control" required="required">
                <span>Email</span>
             </div>
             <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
    </body>

</html>
