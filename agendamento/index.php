<?php include "../includes.php";?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lang['AGENDAMENTO_TITULO']?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="mx-auto container">

        <!-- Progress Form -->
        <form id="progress-form" class="p-4 progress-form" action="#">

            <h4 class="card-title"><?php echo $lang['AGENDAMENTO_TITULO']?></h4>
            <hr>
            <p>
            <?php echo $lang['AGENDAMENTO_INFO']?>
            </p>
            <p>
                ** <?php echo $lang['AGENDAMENTO_INFO_2']?>.<br>
                <!-- *** Se não puder ir até a embaixada no dia do agendamento, poderá remarcar por mais 2 vezes.<br/>-->
                ***<?php echo $lang['AGENDAMENTO_INFO_3']?>.
            </p>

            <div class="p-4 border shadow-sm rounded">
                <h4 class="card-title">
                <?php echo $lang['AGENDAMENTO_INFO_4']?>
                </h4>
                <hr>
                <div class="row">
                    <div class="col-md-6 border-right">
                        <ul class="list-style-none">
                            <li class="my-3">
                                <span>
                                    <i class="icon-envelope-open mr-2 text-success"></i>
                                    <b>E-mail:</b> setorconsulartai@gmail.com </span>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <ul class="list-style-none">
                            <li class="my-3">
                                <span>
                                    <i class="icon-phone mr-2 text-success"></i>
                                    <b>Telefone:</b> (61) 3224-6943 </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div
                class="d-flex flex-column-reverse sm:flex-row align-items-center justify-center sm:justify-end mt-4 sm:mt-5">

                <button type="button" onclick="window.location='form'">
                    Continue
                </button>
                
            </div>




        </form>
        <!-- / End Progress Form -->

    </div>
    <footer class="footer text-center text-muted">
        <p>©
            <?php echo date('Y');?>
            <?php echo $lang['FEITO_POR']?> <i class="fa fa-heart fa-beat" style="color: red;"></i>
            <?php echo $lang['POR']?> <span><a href="#" target="_blank">Capital Prime</a></span>.
            <?php echo $lang['PARA_EMBAIXADA']?>
            <?php echo $lang['DIREITOS']?>.
        </p>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
</body>

</html>