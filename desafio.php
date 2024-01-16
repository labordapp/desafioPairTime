<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="estilo.css"/>
  <meta charset="UTF-8"/>
  <title>desafio.php</title>
</head>
<body>
<div>
    <?php
      $dm = isset($_GET["diames"])? $_GET["diames"]:"";
      switch ($dm) {
        case 1:
        case 8:
        case 15:
        case 22:
        case 29:
          echo "Esse dia corresponde a uma segunda-feira";
          break;
        case 2:
        case 9:
        case 16:
        case 23:
        case 30:
            echo "Esse dia corresponde a uma terça-feira";
            break;
        case 3:
        case 10:
        case 17:
        case 24:
        case 31:
            echo "Esse dia corresponde a uma quarta-feira";
            break;
        case 4:
        case 11:
        case 18:
        case 25:  
            echo "Esse dia corresponde a uma quinta-feira";
            break;
        case 5:
        case 12:
        case 19:
        case 26:  
            echo "Esse dia corresponde a uma sexta-feira";
            break;
        case 6:
        case 13:
        case 20:
        case 27:  
            echo "Esse dia corresponde a um sábado";
            break;
        case 7:
        case 14:
        case 21:
        case 28:  
            echo "Esse dia corresponde a um domingo";    
        }
    ?>
    &nbsp&nbsp<a class="botao" href="desafio.html">Voltar</a>
</div>
</body>
</html>
