@extends('layouts.app')

@section('content')
    <section class="content">
        <form method="post" _lpchecked="1">
            {{ csrf_field() }}
        <div class="row">
            <div class="col-md-12">
                <!-- LINE CHART -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Formulario de Orçamento</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input class="form-control" placeholder="Nome do Cliente" id="nome" name="nome" required style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;" type="text">
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" placeholder="Seu email" id="email" name="email" required style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;" type="text">
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label>Telefone</label>
                                    <input class="form-control" placeholder="Seu Telefone" id="telefone" name="telefone" required style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;" type="text">
                                </div>
                            </div>
                        </div>
                        <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
                            Informações sobre o Galpão
                        </h4>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label>Altura</label>
                                    <input class="form-control" placeholder="Altura" id="altura" name="altura" required style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;" type="text">
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label>Largura</label>
                                    <input class="form-control" placeholder="Largura" id="largura" name="largura" required style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;" type="text">
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label>Comprimento</label>
                                    <input class="form-control" placeholder="Comprimento" id="comprimento" required name="comprimento" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
                <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
            </div>
            <!-- /.col (RIGHT) -->

        </div>
        <!-- /.row -->
        </form>
    </section>
    @if($invoces == 1)
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

        <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-xs-12">
                <form action="/imprimir" method="post">
                    {{ csrf_field() }}
                    <input id="nome" name="nome" hidden value="{{$form->nome}}">
                    <input id="telefone" name="telefone" hidden value="{{$form->telefone}}">
                    <input id="email" name="email" hidden value="{{$form->email}}">
                    <input id="altura" name="altura" hidden value="{{$form->altura}}">
                    <input id="largura" name="largura" hidden value="{{$form->largura}}">
                    <input id="comprimento" name="comprimento" hidden value="{{$form->comprimento}}">
                <button type="submit" class="btn btn-default" style="margin-right: 5px;">
                    <i class="fa fa-print"></i> Imprimir
                </button>
                </form>
                    <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
                    <i class="fa fa-download"></i> Gerar PDF
                </button>
            </div>
        </div>
    </section>
    @endif
@endsection

