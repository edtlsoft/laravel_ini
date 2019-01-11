@extends('layouts.master')

@section('scripts')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
@endsection


@section('styles')
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection


@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <!-- <div class="panel panel-widget" id="item_1"> -->
        <div class="col-xs-12">
            
            <div class="panel panel-widget" id="item_1">
                <div class="head-menu-group-x panel-heading widget-heading">
                    <span> REFERENCIA </span>
                </div>
                <div class="panel-body">
                    <div class="icon-container-body">

                        <div class="item">
                            <a class="icon-file_manager" href="./generar_rips.php"> <img src="./images/dashboard/icon_referencia.png" class="img-item-panel"> </a>
                            <a class="itemTextWrapper" href="./generar_megaplano.php"> REGISTRAR REFERENCIA </a>
                        </div>

                        <div class="item hidden">
                            <a class="icon-file_manager" href="./validar_rips.php"> <img src="./img/icons/rips-icon.png" class="img-item-panel"> </a>
                            <a class="itemTextWrapper" href="./validar_rips.php"> VALIDAR RIPS </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div> 
</section>

    
@endsection
