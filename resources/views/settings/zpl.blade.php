@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Update ZPL Settings
    @parent
@stop

@section('header_right')
    <a href="{{ route('settings.index') }}" class="btn btn-default"> {{ trans('general.back') }}</a>
@stop


{{-- Page content --}}
@section('content')
    <style>
        .checkbox label {
            padding-right: 40px;
        }
    </style>
    {{ Form::open(['method' => 'POST', 'files' => true, 'class' => 'form-horizontal', 'role' => 'form' ]) }}
    <!-- CSRF Token -->
    {{csrf_field()}}
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
            <div class="panel box box-default">
                <div class="box-header with-border">
                    <h4 class="box-title">
                        <i class="fa fa-sitemap"></i> Barcodes
                    </h4>
                </div>
                <div class="box-body">
                    <div class="col-md-11 col-md-offset-1">
                        <!-- ZPL printer settings -->
                        <div class="form-group {{ $errors->has('zpl_printer') ? 'error' : '' }}">
                            <div class="col-md-3">
                                {{ Form::label('zpl_printer', trans('admin/settings/general.zpl_printer')) }}
                            </div>
                            <div class="col-md-9">
                                {{ Form::text('zpl_printer', Input::old('zpl_printer', $setting->zpl_printer), array('class' => 'form-control', 'placeholder' => 'Ex: 172.20.1.4:9100')) }}
                            </div>
                        </div>
                        <!-- ZPL print on asset create -->
                        <div class="form-group">
                            <div class="col-md-3">
                                {{ Form::label('zpl_print_on_asset_create', trans('admin/settings/general.zpl_print_on_asset_create')) }}
                            </div>
                            <div class="col-md-9">
                                {{ Form::checkbox('zpl_print_on_asset_create', '1', Input::old('zpl_print_on_asset_create', $setting->zpl_print_on_asset_create)) }}
                                @lang('admin/settings/general.zpl_print_on_asset_create')
                            </div>
                        </div>
                        <!-- ZPL template -->
                        <div class="form-group">
                            <div class="col-md-3">
                                {{ Form::label('zpl_template', trans('admin/settings/general.zpl_template')) }}<br/>
                                FN1 = QR<br/>
                                FN2 = Header<br/>
                                FN3 = Tag<br/>
                                FN4 = Name<br/>
                                FN5 = Model<br/>
                                FN6 = M.Num<br/>
                                FN7 = Serial
                            </div>
                            <div class="col-md-9">
                                <p>^XA<br>^DFR:label.GRF^FS</p>
                                {{ Form::textarea('zpl_template', Input::old('custom_css', $setting->zpl_template), array('class' => 'form-control','placeholder' => '')) }}
                                <p>^XZ</p>
                            </div>
                        </div>
                    </div>
                </div> <!--/.box-body-->
                <div class="box-footer">
                    <div class="text-left col-md-6">
                        <a class="btn btn-link text-left" href="{{ route('settings.index') }}">{{ trans('button.cancel') }}</a>
                    </div>
                    <div class="text-right col-md-6">
                        <button type="submit" class="btn btn-success"><i class="fa fa-check icon-white"></i> {{ trans('general.save') }}</button>
                    </div>
                </div>
            </div> <!-- /box -->
        </div> <!-- /.col-md-8-->
    </div> <!-- /.row-->
    {{Form::close()}}
@stop
