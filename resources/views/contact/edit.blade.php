@extends('layouts.app')
@section('content')
<h1 class="page-header">
    Editar información de contacto
</h1>
   
<div class="col-sm-10">
                @if(session('status'))
    <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Info!</strong> {{ session('status') }}
    </div>
    @endif
    <form action="{{ route('contact.update', $contacto->id) }}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
        {!! method_field('PUT') !!}
                        <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }} ">
                            <input type="text" class="form-control" id="name" name="name" 
                            placeholder="Company name" value="{{ $contacto->name}}">
                            @if($errors->has('name'))
                            <span class="help-block">
                            <strong> {{ $errors->first('name') }} </strong>
                                </span>
                                 @endif
                                </div>
                            <div class="form-group has-feedback {{ $errors->has('address') ? 'has-error' : '' }} ">
                            <input type="text" class="form-control" id="address" name="address" 
                            placeholder="Address" value="{{ $contacto->address }}">
                            @if($errors->has('address'))
                                <span class="help-block">
                                    <strong> {{ $errors->first('address') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('state') ? 'has-error' : '' }} ">
                            <input type="text" class="form-control" id="state" name="state" 
                            placeholder="State" value="{{ $contacto->state }}">
                            @if($errors->has('state'))
                                <span class="help-block">
                                    <strong> {{ $errors->first('state') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('phone') ? 'has-error' : '' }} ">
                            <input type="text" class="form-control" id="phone" name="phone" 
                            placeholder="Phone" value="{{ $contacto->phone }}">
                            @if($errors->has('phone'))
                                <span class="help-block">
                                    <strong> {{ $errors->first('phone') }} </strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('mail') ? 'has-error' : '' }} ">
                            <input type="email" class="form-control" id="mail" name="mail" 
                            placeholder="Email" value="{{ $contacto->mail }}">
                            @if($errors->has('mail'))
                                <span class="help-block">
                                    <strong> {{ $errors->first('mail') }} </strong>
                                </span>
                            @endif
                        </div>    
                            <div class="form-group has-feedback {{ $errors->has('facebook') ? 'has-error' : '' }} ">
                            <input type="text" class="form-control" id="facebook" name="facebook" 
                            placeholder="Facebook" value="{{ $contacto->facebook }}">
                            @if($errors->has('facebook'))
                                <span class="help-block">
                                    <strong> {{ $errors->first('facebook') }} </strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group has-feedback {{ $errors->has('twitter') ? 'has-error' : '' }} ">
                        <input type="text" class="form-control" id="twitter" name="twitter" 
                        placeholder="Twitter" value="{{ $contacto->twitter }}">
                        @if($errors->has('twitter'))
                            <span class="help-block">
                                <strong> {{ $errors->first('twitter') }} </strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback {{ $errors->has('google') ? 'has-error' : '' }} ">
                    <input type="text" class="form-control" id="google" name="google" 
                    placeholder="Google" value="{{ $contacto->google }}">
                    @if($errors->has('google'))
                        <span class="help-block">
                            <strong> {{ $errors->first('google') }} </strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('youtube') ? 'has-error' : '' }} ">
                            <input type="text" class="form-control" id="youtube" name="youtube" 
                            placeholder="Youtube" value="{{ $contacto->youtube }}">
                            @if($errors->has('youtube'))
                                <span class="help-block">
                                    <strong> {{ $errors->first('youtube') }} </strong>
                                </span>
                            @endif
            </div>        
            <br>
            <button class="btn btn-success">
            Editar información
            </button>
    </form>
@endsection