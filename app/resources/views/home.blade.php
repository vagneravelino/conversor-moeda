@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="content">
        <img src="{{ asset('images/currency-converter.png') }}"
            class="rounded mx-auto d-block img-logo" alt="currency-converter">
        <div class="title m-b-md">
            {{ __(config('app.name')) }}
        </div>
    </div>

    <div class="row justify-content-center">

        <div class="col-md-12">

            <div class="card">
                <div class="card-header">{{ __('Converter') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" id="txt_origem" value="1.00"
                                    onkeypress="$(this).mask('###0.00', {reverse: true});"
                                    class="form-control" placeholder="{{ __('Value to Convert') }}">
                                <label for="txt_origem">{{ __('Value to Convert') }}</label>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="select_moeda_origem">{{ __('Currency') }} ({{ __('From') }}):</label>
                                <div class="form-floating">
                                    <select class="form-select" id="select_moeda_origem" placeholder="{{ __('Currency') }} ({{ __('From') }})">
                                        <option selected value="">{{ __('Choose...') }}</option>
                                        @foreach ($moedas as $moeda)
                                            <option value="{{ $moeda['codigo'] }}" data-simbol="{{ $moeda['simbol'] }}">{{ $moeda['moeda'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="select_moeda_destino">{{ __('Currency') }} ({{ __('To') }}):</label>
                                <div class="form-floating">
                                    <select class="form-select" id="select_moeda_destino" placeholder="{{ __('Currency') }} ({{ __('To') }})">
                                        <option selected value="">{{ __('Choose...') }}</option>
                                        @foreach ($moedas as $moeda)
                                        <option value="{{ $moeda['codigo'] }}" data-simbol="{{ $moeda['simbol'] }}">{{ $moeda['moeda'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" readonly value="0,00"id="txt_destino" class="form-control" placeholder="{{ __('Coverted Value') }}">
                                <label for="txt_destino">{{ __('Converted Value') }}</label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
