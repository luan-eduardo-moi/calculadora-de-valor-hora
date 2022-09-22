<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Calculadora de Valor Hora</title>

       <style>
          
          h1, label{
              color: #0dcaf0;
          }
         
      </style>
      
  </head>
    
  <body>

      <?php
        $taxa_hora = $_POST['taxa_hora']; 

        //valor da Hora Trabalhada Fórmula: (Horas * Valor da Hora). ( 00 x R$ 80,00 )
        $tempo_hora = $_POST['tempo_hora']; 
        $valor_hora = ( $tempo_hora * $taxa_hora );

        //valor dos Minutos Trabalhados Fórmula: (Minutos * Valor do Minuto). ( 15 x R$ 1,33 )
        $tempo_minuto = $_POST['tempo_minuto']; 
        $valor_minuto = ( $tempo_minuto / 60 ) * $taxa_hora;
        
        // SOMA valor hora + valor minuto
        $total=( 
            $valor_hora + $valor_minuto
        );
      ?>

      <div class="container p-0">

          <h1 class="mt-5">Cálculo de <strong class="badge bg-info">Horas em Dinheiro</strong>
          </h1>
        <hr class="bg-info">


          <div class="alert alert-info" role="alert">              
                  <p>
                    <strong> Tempo gasto: </strong> <?php echo "{$tempo_hora}:{$tempo_minuto}" ?>
                  </p>
                        
                  <p>
                    <strong> Taxa Por Hora: R$ </strong> <?php echo $taxa_hora; ?>
                  </p>
              
              <hr>
              
                  <h5 class="alert-heading">
                    <strong> Total À Receber: R$ </strong> 
                    <?php 
                        echo number_format($total,2,",",".");;
                    ?>
                  </h5>
              
              <a href="index.html">
                  <button type="submit" class="btn btn-info mt-3">Calcular Novo Tempo</button>
              </a>
              
         </div>
      </div>

      
<script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
      
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
</body>
    
</html>
