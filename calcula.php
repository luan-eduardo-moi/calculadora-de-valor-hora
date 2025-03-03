<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Calculadora de Valor Hora</title>

         <style>
         body, h1, h5, label, p{
         color: #0f5132;
         text-align: center;
         }
         span{
         font-weight: 500;
         }
         a{
         text-decoration: none;
         color: #0f5132;
         text-align: center;
         }
      </style>
      
  </head>
    
  <body>

      <?php
        $taxa_hora = $_POST['taxa_hora']; 

        //valor da Hora Trabalhada Fórmula: (Horas * Valor da Hora). ( 00 x R$ 80,00 )
        $tempo_hora = $_POST['tempo_hora']; 
        $valor_hora = ( $tempo_hora * $taxa_hora );

        //valor dos Minutos Trabalhados Fórmula: (Minutos * Valor do Minuto). ( 15 x R$ 1,33 )
        $tempo_minuto = $_POST['tempo_minuto']; 
        $valor_minuto = ( $tempo_minuto / 60 ) * $taxa_hora;
        
        // SOMA valor hora + valor minuto
        $total=( 
            $valor_hora + $valor_minuto
        );
      ?>

      <div class="container p-0">

          <h1 class="mt-5">Cálculo de <strong class="badge bg-success">Horas em Dinheiro</strong>
          </h1>
        <hr class="bg-success">


          <div class="alert alert-success" role="alert">              
                   <h3 class="alert-link"> Tempo gasto:
                        <?php echo '<span>' . $tempo_hora . ' Hora(s) e ' . $tempo_minuto . ' Minuto(s)</span>' ?>
                    </h3>

                    <h4 class="alert-link"> Taxa Por Hora:
                        <?php echo '<span> R$ ' . $taxa_hora . '</span>' ?>
                    </h4>
              
              <hr>
              
                  <h5 class="alert-link">
                    <strong> Total À Receber: R$ </strong> 
                    <?php 
                        echo number_format($total,2,",",".");;
                    ?>
                  </h5>
              
              <a href="index.html">
                  <button type="submit" class="btn btn-success mt-3">
                  <strong> Calcular Novo Tempo </strong>
                  </button>
              </a>
              
         </div>

        <footer>
            <p class="text-center mt-5" style="font-size: 18px;">
                © 2025 Desenvolvido por - 
                <a href="https://github.com/luan-eduardo-moi" target="_blank">
                Luan Eduardo Moi
                </a>
            </p>
        </footer>
        
      </div>

      
<script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
      
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
</body>
    
</html>
