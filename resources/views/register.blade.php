<html>  
    <head>   
        <title>  
            Registration Page  
        </title>  
    </head>  
    @if(session('success'))
        <h3>{{session('success')}}</h3>
    @endif
    <body>  
    <br>  
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <a href="/">Home</a> <a href="/login">Login</a>
    <h2> Register Page </h2>
    <form action="/register" method="POST">
        @csrf  
        Email:  
        <input type="email" id="email" name="email" required/> <br>    
        Password:  
        <input type="password" id="password" name="password" required> <br>   
        <input type="submit" value="Submit"/>  
    </form>  
    </body>  
</html>  