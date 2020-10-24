<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <title>76Telecom :: PPPoE</title>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta name="msapplication-TileColor" content="#eb5d1e">
  <meta name="theme-color" content="#eb5d1e">
  <meta name="robots" content="noindex, nofollow" />

  <link href="libs/css/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="libs/css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="libs/css/style.css" rel="stylesheet" type="text/css">

  <link href="libs/image/fav.png" rel="icon" type="image/png" sizes="32x32" />
</head>

<body>
  <div class="container container-alt" style="margin-top: 6%; width:40%;">
    <form method="post">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">   Gerador PPPoE automático<span class="pull-right">
              <div class="pull-right">
                <button type="button" class="btn btn-xs btn-danger" id="btn_minus"><i class="fa fa-minus"></i></button>
                <button id="config" type="button" class="btn btn-xs btn-danger" onclick="$('#moda_config').modal();"><i
                    class="fa fa-cogs"></i></button>
              </div>
          </h3>
        </div>
        <div class="panel-body">
          <div class="col-md-10">
            <textarea style="resize: none; margin-top: 3%;" name="lista" id="lista"
              placeholder="PROTOCOLO EX: 2020123987" class="form-control" rows="2"></textarea>
          </div>
          <div align="center" style="margin-top: 2%;">
            <button type="button" class="btn btn-primary" id="iniciar" onclick="start();" title="Iniciar"> <i
                class="fa fa-play"></i></button>
          </div>
          <div class="col-md-10" style="margin-top: 2%;" id="aprovados">
            <span align="center">

              <span style="font-size: 18px;">Condições necessárias:</span><br />
                  * Utilizar o login do <b>ERP</b>,<br />
                  * Chamado com status em <b>Aberto</b>,<br />
                  * Chamado na fila de <b>ATIVAÇÃO</b> ou <b>ATIVANDO</b>,<br />
                  * Para dobrar a banda, basta ter a mensagem <b>Dobro</b> no chamado.<br />

          </div>
          <div class="pull-right" style="margin-top: 3%; width:35%;">
            Atualizado em: 13/05/2020
          </div>
        </div>
      </div>
    </form>
  </div>

  <div class="modal fade" id="moda_config" role="dialog" data-backdrop="static" style="overflow-y: auto;"
    data-keyboard="false">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <div class="pull-right">
            <button disabled id="config" type="button" class="btn btn-xs btn-warning"
              onclick="$('#moda_info').modal();"><i class="fa fa-question"></i></button>
            <button data-dismiss="modal" class="btn btn-xs btn-danger"><i class="fa fa-close"></i></button>
          </div>
          <h4 class="modal-title" align="center">
            <strong>LOGIN ERP</strong>
          </h4>
        </div>
        <div class="modal-body">
          <form id="form-config">
            <div class="panel panel-primary">
              <div class="input-group">
                <span class="input-group-addon">Login</span>
                <input id="user" type="text" class="form-control" name="user" placeholder="Usuário" />
                <input id="pass" type="password" class="form-control" name="pass" placeholder="Senha" />
              </div>
            </div>
            <div class="modal-body" style="display:none" id="alerta_erro">
              <strong>Ops! </strong> <span id="motivoerro"></span>
            </div>
          </form>
        </div>
        <div class="modal-footer" style="border-top:0px solid #e5e5e5;padding:0px 20px 20px">
          <button type="button" data-plugin="ladda" data-style="zoom-in" class="btn btn-primary pull-right"
            onclick="salvarConfig()"><i class="fa fa-save"></i> Salvar</button>
        </div>
      </div>
    </div>
  </div>

</body>

<script src="libs/js/jquery.min.js"></script>
<script src="libs/js/jquery-ui.js"></script>
<script src="libs/js/sweetalert2.all.min.js"></script>
<script src="libs/js/data.main.js"></script>
<script src="libs/js/bootstrap.min.js"></script>
<script src="libs/js/spin.min.js"></script>
<script src="libs/js/ladda.min.js"></script>