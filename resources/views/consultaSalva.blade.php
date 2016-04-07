@extends('base')
    @section('content')
    <div class="container-fluid">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Teste PHP | Consultas Salvas</div>
                </div> 
                <div class="list-group">
                    <button type="button" class="list-group-item">item1</button>
                    <button type="button" class="list-group-item">item2</button>
                    <button type="button" class="list-group-item">item3</button>
                    <button type="button" class="list-group-item">item4</button>
                    <button type="button" class="list-group-item">item5</button>
                </div>                     
            </div> 
            <a id="btn-home" href="/" class="btn btn-danger ">Sair</a>
        </div>
    </div>
@stop