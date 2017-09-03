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
              <div class="jumbotron">
                @if (session()->has('message'))

                     <label class="alert alert-danger text-warning">{{session('message')}}</label>
                @endif
                 <form class="" action="/Upload" method="post" enctype="multipart/form-data">
                   {{csrf_field()}}
                     <div class="form-group">
                         <label>Choose File</label>
                         <input type="file" name="file" class="form-control input-lg">

                     </div>
                     <button type="submit" class="btn-success">Upload</button>
                 </form>

                 <a href="\images">View Image</a>
                <a href="\DBupload">DB Uplaod</a>

              </div>
            </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
