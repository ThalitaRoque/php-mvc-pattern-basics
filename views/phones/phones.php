<?php
    



?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $data["titulo"]; ?></title>
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
         <h2><?php echo $data["titulo"]; ?></h2>

         <br />

          <a href="index.php?c=phones&a=new" class="btn btn-outline-primary" disabled>ADD</a>

          <br />
          <br />
          <br />
        

        <div class="table-responsive">
          <table class="table table-striped table-hover" border="1" width="80%">
            <thead>
                 <tr>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Memory</th>
                    <th>Company</th>
                    <th>Price</th>
                    <th>Modify</th>
                    <th>Remove</th>
                 </tr>
             </thead>

             <tbody>
                <?php foreach ($data["phones"] as $dato) {
                    echo "<tr>";
                    echo "<td>".$dato["brand"]."</td>";
                    echo "<td>".$dato["model"]."</td>";
                    echo "<td>".$dato["memory"]."</td>";
                    echo "<td>".$dato["company"]."</td>";
                    echo "<td>".$dato["price"]."</td>";
                    echo "<td><a href ='index.php?c=phones&a=modify&id=".$dato["id"]."' class='btn btn-outline-secondary'><i class='fas fa-user-edit'></i></a></td>";
                    echo "<td><a href ='index.php?c=phones&a=remove&id=".$dato["id"]."' class='btn btn-outline-danger'><i class='far fa-trash-alt'></i></a></td>";
                    echo "</tr>";
                }?>
             </tbody>
            
         </table>
            </div>
            </div>
    </body>
</html>