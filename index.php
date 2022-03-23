<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Aula PHP</title>
  </head>
  <body>
    <?php
      $cliente = array();

      $cliente["Nome"][0] = "Leonardo";
      $cliente["CPF"][0] = "12345678910";
      $cliente["RG"][0] = "9876543210";

      $cliente["Nome"][1] = "Jaqueline";
      $cliente["CPF"][1] = "98765432101";
      $cliente["RG"][1] = "1234567890";

      $cliente["Nome"][2] = "Antonio";
      $cliente["CPF"][2] = "14785236950";
      $cliente["RG"][2] = "963258741";

      $cliente["Nome"][3] = "Alex";
      $cliente["CPF"][3] = "96325874108";
      $cliente["RG"][3] = "745896321";

      $tabela = "<table class=\"table table-striped\">";

       $tabela .= "<thead>
                      <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">Nome</th>
                        <th scope=\"col\">CPF</th>
                        <th scope=\"col\">RG</th>
                      </tr>
                  </thead>
        <tbody>";
echo "Primeira forma - PHP Direto";
      for ($i=0; $i < count($cliente); $i++) {
        $tabela .= "<tr>
                      <th scope=\"row\">".($i+1)."</th>
                      <td>".$cliente["Nome"][$i]."</td>
                      <td>".$cliente["CPF"][$i]."</td>
                      <td>".$cliente["RG"][$i]."</td>
                    </tr>
        ";
      }

      $tabela .= "</tbody>";

      echo $tabela;

     // echo "<table class=\"table table-striped\>"";
    ?>
      
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">CPF</th>
            <th scope="col">RG</th>
          </tr>
        </thead>
        <tbody>
Segunda forma - HTML + PHP
          <?php
            for ($i = 0; $i < count($cliente); $i++) {
              
          
          ?>
          
          <tr>
            <th scope="row"><?php echo ($i+1)?></th>
            <td><?php echo $cliente["Nome"][$i]?></td>
            <td><?php echo $cliente["CPF"][$i]?></td>
            <td><?php echo $cliente["RG"][$i]?></td>
          </tr>
          <?php  }?>

        </tbody>
      </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
