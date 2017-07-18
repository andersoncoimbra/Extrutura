<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Extrutura | Orçamento</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <img src="http://www.extruturaengenharia.com.br/wp-content/uploads/2014/12/extrutura-logo200.png" width="170">
                    <small class="pull-right">{{date('d/m/Y')}}</small>
                </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                <address>
                    <strong>Extrutura Engenharia.</strong><br>
                    Alça Viária, Km 01, nº 27<br>
                    MArituba, PA<br>
                    Fones: (91) 3255-2073<br>
                    (91) 3255-0605<br>
                    (91) 98206-1415<br>
                    Email: vendas@extruturaengenharia.com.br
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                Cliente
                <address>
                    <strong>{{$form->nome}}</strong><br>

                    Fone: {{$form->telefone}}<br>
                    Email: {{$form->email}}
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                <b>Orçamento #0012</b><br>
                <br>
                <b>ID:</b> 4F3S8J<br>
                <b>Data para Referência:</b> {{date('d')}}<br>
                <b>Conta:</b> 968
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Qtd</th>
                        <th>Nome</th>
                        <th>Description</th>
                        <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$form->largura*$form->comprimento}}</td>
                        <td>M² Estrutura metálica</td>
                        <td>Estrutura de {{$form->largura*$form->comprimento}}M² e {{$form->altura}}m de altura</td>
                        <td>R$ {{number_format($form->largura*$form->comprimento*150, 2, ',', ' ')}}</td>
                    </tr>

                    </tbody>
                </table>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
                <p class="lead">Metodo de pagamento:</p>
                <img src="assets/dist/img/credit/visa.png" alt="Visa">
                <img src="assets/dist/img/credit/mastercard.png" alt="Mastercard">
                <img src="assets/dist/img/credit/american-express.png" alt="American Express">
                <img src="assets/dist/img/credit/paypal2.png" alt="Paypal">

                <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                    A forma de pagamento pode variar conforme o acordo feito entre o cliente e nós prestador do serviço. Uma forma simples, que temos usado com bastante exito, é combinar o valor total de uma construção, por exemplo R$ 150 p/ m², para pagamento do serviço de construção de um imóvel de padrão médio, então dividimos a obra por fases e atribuímos percentuais de pagamento para cada fase, por exemplo:20% para conclusão das fundações, 25% para conclusão da estrutura, 20% para alvenaria, esquadrias, portas, etc., e o restante, 35%, para os acabamentos (gesso, revestimentos, metais, bancadas, louças, etc.).
                </p>
            </div>
            <!-- /.col -->
            <div class="col-xs-6">
                <p class="lead">Fechamento {{date('d/m/Y')}}</p>

                <div class="table-responsive">
                    <table class="table">
                        <tbody><tr>
                            <th style="width:50%">Subtotal:</th>
                            <td>R$ {{number_format($form->largura*$form->comprimento*150, 2, ',', ' ')}}</td>
                        </tr>
                        <tr>
                            <th>Imposto(16.7%)</th>
                            <td>R$ {{number_format($form->largura*$form->comprimento*150*0.192, 2, ',', ' ')}}</td>
                        </tr>
                        <tr>
                            <th>Outro Custos:</th>
                            <td>R$ {{number_format($form->largura*$form->comprimento*150*0.00292, 2, ',', ' ')}}</td>
                        </tr>
                        <tr>
                            <th>Total:</th>
                            <td>R$ {{number_format(($form->largura*$form->comprimento*150)+($form->largura*$form->comprimento*150*0.192)+($form->largura*$form->comprimento*150*0.00292), 2, ',', ' ')}}</td>
                        </tr>
                        </tbody></table>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->


    </section>
    <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
