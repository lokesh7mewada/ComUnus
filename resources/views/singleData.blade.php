
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>ComUNus</title>
</head>
<body>
      <!-- Page Content -->
      <div style="margin-left:0%">
      
      <div class="w3-container w3-teal">
        <h1>Single data List View</h1>
      </div>
      <div class="w3-container">
        <a href="{{url('api/events')}}">
            <button type="button">back</button>
          </a>
      <div class="container">
          <table  class="table table-bordered table-striped"  >
              <thead>
                  <tr>
                      <th>Id</th>
                      <th>type</th>
                      <th>address</th>
                      <th>country</th>
                      <th>city</th>
                      <th>capacity</th>
                     
                  </tr>
              </thead>
      <tr>
          <td>{{$events['id']}}</td>
          <td>{{$events['type']}}</td>
          <td>{{$events['venue']['address']}}</td>
          <td>{{$events['venue']['country']}}</td>
          <td>{{$events['venue']['city']}}</td>
          <td>{{$events['venue']['capacity']}}</td>
      </tr>       

  </table>
      </div>
            


</div>
</body>
</html>





