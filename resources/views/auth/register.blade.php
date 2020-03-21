@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address1" class="col-md-4 col-form-label text-md-right">Address Line 1</label>

                            <div class="col-md-6">
                                <input id="address1" type="text" class="form-control @error('address1') is-invalid @enderror" name="address1" value="{{ old('address') }}" required autocomplete="address1">

                                @error('address1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address2" class="col-md-4 col-form-label text-md-right">Address Line 2</label>

                            <div class="col-md-6">
                                <input id="address2" type="text" class="form-control @error('address2') is-invalid @enderror" name="address2" value="{{ old('address') }}" required autocomplete="address2">

                                @error('address2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">City</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('address') }}" required autocomplete="city">

                                @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right">Country</label>

                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('address') }}" required autocomplete="country">

                                @error('country')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-sd-1 justify-content-center">
                                <label for="coughing_sneezing" class="col-form-label checkbox-inline">Coughing and Sneezing</label>
                                <input style = "height:23px; width:23px; padding-top:7px; text-align: left;"id="coughing_sneezing" type="checkbox" class="checkbox-inline form-control @error('coughing_sneezing') is-invalid @enderror" name="coughing_sneezing" value="{{ old('address') }}"  autocomplete="coughing_sneezing">

                                @error('coughing_sneezing')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="col-sd-1 ml-3 justify-content-center">
                                <label for="fever" class="col-sd-3 col-form-label text-md-right checkbox-inline">Fever</label>
                                <div class="col-md-6">
                                    <input style = "height:23px; width:23px; padding-top:7px;"id="fever" type="checkbox" class=" form-control @error('fever') is-invalid @enderror" name="fever" value="{{ old('address') }}"  autocomplete="fever">
                                    @error('fever')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>    
                            <div class="col-sd-1 justify-content-center">
                                <label for="breathingproblem" class="col-sd-3 col-form-label text-md-right checkbox-inline">Breathing Problem</label>
                                <div class="col-md-6">
                                    <input style = "height:23px; width:23px; padding-top:7px;"id="breathingproblem" type="checkbox" class="form-control @error('breathingproblem') is-invalid @enderror" name="breathingproblem" value="{{ old('address') }}"  autocomplete="breathingproblem">
                                    @error('breathingproblem')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>    


                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-sd-1 justify-content-center">
                                <label for="sinus" class="col-form-label checkbox-inline">Painful Sinus</label>
                                <input style = "height:23px; width:23px; padding-top:7px; text-align: left;"id="sinus" type="checkbox" class="checkbox-inline form-control @error('sinus') is-invalid @enderror" name="sinus" value="{{ old('address') }}"  autocomplete="sinus">

                                @error('sinus')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="col-sd-1 ml-3 justify-content-center">
                                <label for="earpressure" class="col-sd-3 col-form-label text-md-right checkbox-inline">EarPressure</label>
                                <div class="col-md-6">
                                    <input style = "height:23px; width:23px; padding-top:7px;"id="earpressure" type="checkbox" class=" form-control @error('earpressure') is-invalid @enderror" name="earpressure" value="{{ old('address') }}"  autocomplete="earpressure">
                                    @error('earpressure')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>    
                            <div class="col-sd-1 justify-content-center ml-2">
                                <label for="headache" class="col-sd-3 col-form-label text-md-right checkbox-inline">HeadAche</label>
                                <div class="col-md-6">
                                    <input style = "height:23px; width:23px; padding-top:7px;"id="headache" type="checkbox" class="form-control @error('headache') is-invalid @enderror" name="headache" value="{{ old('address') }}"  autocomplete="headache">
                                    @error('headache')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>    
                        </div>    
                        <div class="form-group row justify-content-center">
                            <div class="col-sd-1 justify-content-center">
                                <label for="burning_eyes" class="col-form-label checkbox-inline">Burning Eyes</label>
                                <input style = "height:23px; width:23px; padding-top:7px; text-align: left;"id="burning_eyes" type="checkbox" class="checkbox-inline form-control @error('burning_eyes') is-invalid @enderror" name="burning_eyes" value="{{ old('address') }}"  autocomplete="burning_eyes">

                                @error('burning_eyes')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="col-sd-1 ml-3 justify-content-center">
                                <label for="c_throat" class="col-sd-3 col-form-label text-md-right checkbox-inline">Constricted throat</label>
                                <div class="col-md-6">
                                    <input style = "height:23px; width:23px; padding-top:7px;"id="c_throat" type="checkbox" class=" form-control @error('c_throat') is-invalid @enderror" name="c_throat" value="{{ old('address') }}"  autocomplete="c_throat">
                                    @error('c_throat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>    
                            <div class="col-sd-1 justify-content-center ml-2">
                                <label for="bodyache" class="col-sd-3 col-form-label text-md-right checkbox-inline">Body Ache</label>
                                <div class="col-md-6">
                                    <input style = "height:23px; width:23px; padding-top:7px;"id="bodyache" type="checkbox" class="form-control @error('bodyache') is-invalid @enderror" name="bodyache" value="{{ old('address') }}"  autocomplete="bodyache">
                                    @error('bodyache')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>    
                        </div>
                    </div>  
                     <div class="form-group row justify-content-center">
                            <div class="col-sd-1 justify-content-center">
                                <label for="l_appetite" class="col-form-label checkbox-inline">Lack of appetite</label>
                                <input style = "height:23px; width:23px; padding-top:7px; text-align: left;"id="l_appetite" type="checkbox" class="checkbox-inline form-control @error('l_appetite') is-invalid @enderror" name="l_appetite" value="{{ old('address') }}"  autocomplete="l_appetite">

                                @error('l_appetite')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="col-sd-1 ml-3 justify-content-center">
                                <label for="t_chest" class="col-sd-3 col-form-label text-md-right checkbox-inline">Tightness in the chest</label>
                                <div class="col-md-6">
                                    <input style = "height:23px; width:23px; padding-top:7px;"id="t_chest" type="checkbox" class=" form-control @error('t_chest') is-invalid @enderror" name="t_chest" value="{{ old('address') }}"  autocomplete="t_chest">
                                    @error('t_chest')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>    
                            <div class="col-sd-1 justify-content-center ml-2">
                                <label for="jetlag" class="col-sd-3 col-form-label text-md-right checkbox-inline">Jet Lag</label>
                                <div class="col-md-6">
                                    <input style = "height:23px; width:23px; padding-top:7px;"id="jetlag" type="checkbox" class="form-control @error('jetlag') is-invalid @enderror" name="jetlag" value="{{ old('address') }}"  autocomplete="jetlag">
                                    @error('jetlag')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>    
                        </div>
                    </div>     
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
