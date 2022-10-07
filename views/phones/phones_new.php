<?php
    



?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php  echo $data["titulo"];  ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    </head>
    <body>
    <div class="container">
    </br>
    </br>
         <h2><?php  echo $data["titulo"];  ?></h2>
        
         
        <form id="new" name="new" method="POST" action="index.php?c=phones&a=save" autocomplete="off">
            <div class="form-group">
               <label for="brand">Brand</label>
               <input type="text" class="form-control" id="brand" name="brand"/><br />
            </div>
            <div class="form-group">
                <label for="model">Model</label>
                <input type="text" class="form-control" id="model" name="model" /><br />
            </div>
            <div class="form-group">
                <label for="memory">Memory</label>
                <input type="text" class="form-control" id="memory" name="memory" /><br />
            </div>
            <div class="form-group">
                <label for="company">Company</label>
                <input type="text" class="form-control" id="company" name="company"/><br />
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price"/><br />
            </div>
            </br>
            

            <button id="save" name="save" type="submit" class="btn btn-primary">Save</button>
            
        </form>

   </div>
   </div>

           
    </body>
</html>
