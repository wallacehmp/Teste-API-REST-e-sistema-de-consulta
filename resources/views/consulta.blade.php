@extends('base')
    @section('content')
    <div class="container-fluid">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Teste PHP | Consulta por CNPJ</div>
                </div> 
                    <div style="padding-top:30px" class="panel-body" >
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        <form id="loginform" class="form-horizontal" role="form">
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="cnpj" type="text" class="form-control" name="cnpj" value="" placeholder="CNPJ" required autofocus>                                        
                            </div>
                            <div class="input-group"></div>
                            <div style="margin-top:10px" class="form-group">
                                <div class="col-sm-4 controls">
                                  <button class="btn btn-lg btn-success" type="submit">Pesquisar</button>
                                </div>
                                <div class="col-sm-4 controls">
                                    <a id="btn-home" href="/consultaSalva" class="btn btn-info ">Buscas Salvas</a>
                                </div>
                                <div class="col-sm-4 controls">
                                    <a id="btn-home" href="/" class="btn btn-danger ">Sair</a>
                                </div>
                            </div>
                        </form>  
                    </div>                     
            </div>  
        </div>
    </div>    
@stop
