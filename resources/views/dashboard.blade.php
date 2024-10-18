<html>  
<head>   
<title>  
Dashboard
</title>  
</head>  
<body>  
<br>   
Dashboard   
<br><br>
@if(session('success'))
    <h3>{{session('success')}}</h3>
@endif
@foreach($employee as $data)    
<tr>
    <th>access_token:{{$data->api_token}}</th>
</tr>
@endforeach
<br><a href="/order">Order</a><br>
</body>  
</html>  