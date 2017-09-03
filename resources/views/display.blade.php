<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container container-fluid">
       <table class="table table-bordered table-responsive  table-hover">
              <thead>
                  <tr>
                    <th>Sr#</th>
                    <th>Image</th>
                    <th>Download</th>
                  </tr>
              </thead>
              @php
                $count=1;
              @endphp
              @foreach ($urls as $url)
                  <tr>
                    <td>{{$count++}}</td>
                    <td><img src="<?=asset($url)?>" height="10" width="40"  class="img-thumbnail"></img></td>
                    <td><a href="download{{$url}}">Download</a></td>
                  </tr>
               @endforeach


       </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
