


<br/> 
@if(session('status'))
<a href="logout" style="color: black;"> {{session ('status') }} </a>
@endif 

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title></title>
  </head>
  <body>

   <h1 style="display: flex; font-weight:bold;margin-left :250px; font: size 20px;"> Bonjour bienvenue sur  TIONO{{ session('admin')-> prenom }} <br>CRUD Application </h1>
   <h1 style="margin-left :250px;"> 
   <input style="margin-left :250px;" type="radio" class="btn-check"name="options-outlined" id="success-outlined" autocomplete="off" checked>
<label class="btn btn-outline-success" for="success-outlined"><a href=" {{url('students')}}" style="font-size: 3Opx;">Pour acceder à l'application Cliquer ICI</a></label>
</h1>
<h1 style="margin-left :250px;"> 
<input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off">
<label class="btn btn-outline-danger" for="danger-outlined"><a href="logout" target="blank">Déconnexion</a></label>
</h1>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>