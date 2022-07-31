


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
                      <h1>Api data List View</h1>
                    </div>
                    <div class="w3-container">
                      <div class="search-container">
                        <form action=""  >
                            
                          <input type="number" placeholder="Search Event by ID" name="id" >
                          <button type="submit">Submit</button>
                          <a href="{{url('api/events')}}">
                            <button type="button">Reset</button>
                          </a>
                        </form>
                      </div>
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
                        @php
                        $jsonArray = json_decode($user,true);
                        
                        echo "<pre>";
                           /// print_r($jsonArray['events'][0]['type']);
                            echo "</pre>";
                           // echo $jsonArray['events'];
                           //die;

                    @endphp
                    @foreach($jsonArray['events'] as  $events)
                    <tr>
                        <td>{{$events['id']}}</td>
                        <td>{{$events['type']}}</td>
                        <td>{{$events['venue']['address']}}</td>
                        <td>{{$events['venue']['country']}}</td>
                        <td>{{$events['venue']['city']}}</td>
                        <td>{{$events['venue']['capacity']}}</td>
                    </tr>       
                    @endforeach
                </table>
                    </div>
                          
              
              
              </div>
              </body>
              </html>
              
              
              
              
              
              