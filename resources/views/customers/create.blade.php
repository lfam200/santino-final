@extends('app')@section('htmlheader_title')    Agregar Cliente@endsection@section('contentheader_title')    Agregar Cliente@endsection@section('contentheader_description')    Registrar Cliente@endsection@section('contentheader_level')    <li>Clientes</li><li class="active">Agregar Cliente</li>@endsection@section('main-content')    <div class="row">        <div class="col-xs-12">            <div class="box box-success box-solid">                <div class="box-header">                    <h3 class="box-title">Agregar Cliente</h3>                    <div class="box-tools pull-right">                        <a href="{{ route('customers_show_path') }}">                            <button class="btn btn-box-tool"><i class="fa fa-arrow-circle-left"></i>Regresar</button>                        </a>                    </div>                </div><!-- /.box-header -->                <div class="box-body">                    @include('partials.errors')                    <form action="{{ route('customer_create_path') }}" method="post">                        {{ csrf_field() }}                        <div class="box-body">                            <div class="col-xs-12">                                <div class="col-lg-3">                                    <div class="form-group">                                        <label for="dni">DNI</label>                                        <input type="text" class="form-control" name="dni" placeholder="12345678" tabindex="1" value="{{ old('dni') }}" autofocus>                                    </div>                                </div>                                <div class="col-lg-4">                                    <div class="form-group">                                        <label for="first_name">Nombres</label>                                        <input type="text" class="form-control" name="first_name" placeholder="Santino" value="{{ old('first_name') }}" tabindex="2">                                    </div>                                </div>                                <div class="col-lg-5">                                    <div class="form-group">                                        <label for="last_name">Apellidos</label>                                        <input type="text" class="form-control" name="last_name" placeholder="Santaana" value="{{ old('last_name') }}" tabindex="3">                                    </div>                                </div>                                <div class="col-lg-6">                                    <div class="form-group">                                        <label for="email">E-mail</label>                                        <input type="email" class="form-control" name="email" placeholder="santino@santaana.com" value="{{ old('email') }}" tabindex="4">                                    </div>                                </div>                                <div class="col-lg-3">                                    <div class="form-group">                                        <label for="birthday">Fecha Nacimiento</label>                                        <input type="date" class="form-control" name="birthday" value="{{ old('birthday') }}" tabindex="5">                                    </div>                                </div>                                <div class="col-lg-3">                                    <div class="form-group">                                        <label for="sex" >Sexo</label>                                        <select name="sex" class="form-control" tabindex="6">                                            <option value="H">Hombre</option>                                            <option value="M">Mujer</option>                                        </select>                                    </div>                                </div>                                <div class="col-lg-4">                                    <div class="form-group">                                        <label for="address">Direccion</label>                                        <input type="text" class="form-control" name="address" placeholder="Av. America Sur 1234" value="{{ old('address') }}" tabindex="7">                                    </div>                                </div>                                <div class="col-lg-4">                                    <div class="form-group">                                        <label for="city">Ciudad</label>                                        <input type="text" class="form-control" name="city" placeholder="Trujillo"  value="{{ old('city') }}" tabindex="8">                                    </div>                                </div>                                <div class="col-lg-4">                                    <div class="form-group">                                        <label for="ref_address">Referencia</label>                                        <input type="text" class="form-control" name="ref_address" placeholder="A media cuadra Ovalo Papal" value="{{ old('ref_address') }}" tabindex="9">                                    </div>                                </div>                                <div class="col-lg-4">                                    <div class="form-group">                                        <label for="phone">Telefono Fijo</label>                                        <input type="text" class="form-control" name="phone" placeholder="235467" value="{{ old('phone') }}" tabindex="10">                                    </div>                                </div>                                <div class="col-lg-4">                                    <div class="form-group">                                        <label for="cell_phone">Telefono Movil</label>                                        <input type="text" class="form-control" name="cell_phone" value="{{ old('cell_phone') }}" placeholder="987654321" tabindex="11">                                    </div>                                </div>                            </div>                        </div><!-- /.box-body -->                        <div class="col-xs-12">                            <div class="pull-left">                                <input type="submit" class="btn btn-primary btn-lg" value="Registrar">                            </div>                        </div>                    </form>                    <div class="pull-right">                        <a href="{{ route('customers_show_path') }}"><button class="btn btn-default btn-lg">Cancelar</button></a>                    </div>                </div><!-- /.box-body -->            </div><!-- /.box -->        </div>    </div><!-- /.row -->@endsection