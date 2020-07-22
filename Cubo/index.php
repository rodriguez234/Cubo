<!DOCTYPE html>
<html>
<head>
    <!-- Article: https://paulrhayes.com/2009-07/animated-css3-cube-interface-using-3d-transforms/ -->
    <!-- Demo: https://paulrhayes.com/experiments/cube-3d/ -->
    <!-- Originally posted: 17th July 2009 -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>3D CSS cube, use arrow keys to rotate &mdash; Paul Hayes</title>
    <meta name="author" content="Paul Hayes" />
    <link rel="canonical" href="https://paulrhayes.com/experiments/cube-3d/" />
    

    <link rel="stylesheet" href="css/experiment.css" />
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
            border: 0;
        }
        table{
            margin: 0 auto;
            width: 100%;
        }
        .cuadro{
            border: 1px solid white;
            width: 30%;
            display: inline-block;  
        }
        .face{
            background-color: rgba(0,0,100,0.5);
        }
        .one,.two,.three,.four,.five,.six{
            font-size: 0.8em;
        }
        table{
            text-align: center;
        }
        .borde{
            border: 1px solid white;
            font-size: 0.7em;
            min-width: 45px;
        }
        table td{
            box-sizing: border-box;
            border: 1 solid white;
            padding: 0.6em 0.2em;
        }
        .encabezado{
            background-color: #006;
            padding: 1em;
        }
        .tabla td{
            color: black;
            background-color: #66f;
            padding: 0.5em;
        }
        .six{
            text-align: center;
        }
        .six img{
            max-width: 100%;
        }
        th,td{
            font-size: 0.7em;
            border: 1px solid white;
        }
    </style>
    <style type="text/css">
        th{
            border: 1px solid white;
            font-size: 0.7em;
        }
    </style>
</head>
<body class="experiment">
    <div class="wrapper">
        <p class="learn">
            This is a demo, <a href="https://paulrhayes.com/2009-07/animated-css3-cube-interface-using-3d-transforms/">learn how it works</a>.
        </p>

<div id="experiment">
    <div id="cube">
        <div class="face one">

        </div>
        <div class="face two">
          <?php
          require_once("insertar.php");
          $obj = new Venta();
          $res = $obj->clientes();
          ?>    
          <table>
            <tr>
                <?php 
                echo "<th></th>";
                $contador = 1;
                while($fila=$res->fetch_assoc()){
                echo "<th id='cliente".$fila["id"]."'>".$fila["nombre"]."</th>";
                            }
                ?>
            </tr>
            <?php
            $res = $obj->productos();
            while($fila = $res->fetch_assoc()){
             echo "<tr>";
             echo "<td>".$fila["nombre"]."</td>"; 
            $res2 = $obj->matriz($fila["id"]);
            $fila2 = $res2->fetch_assoc();
             for($i = 1; $i<=10; $i++){
                if($i == $fila2["id_cliente"]){
                 echo "<td>".$fila2["cantidad"]."</td>";
                 $fila2 = $res2->fetch_assoc();
                }else{
                echo "<td></td>";
            }}
             echo "<tr>";
           }
             ?>

          </table>
        </div>
        <div class="face three">
            
        </div>
        <div class="face four">
            
        </div>
        <div class="face five">
            
        </div>
        <div class="face six">
            
        </div>
    </div>
</div>

    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/experiment.js"></script>
</body>
</html>
