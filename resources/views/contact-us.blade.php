@extends('layouts.web')
@section('content')
<style>
       #map {
        height: 400px;
        width: 100%;
        margin-bottom:50px;
       }
</style>
<div class="row">           
<div class="col-sm-12">                         
    <h2 class="title text-center">Donde <strong>encontrarnos</strong></h2>   
    <div id="map"></div>
    <script>
    function initMap() {
    var uluru = {lat: 10.4838685, lng: -66.828812};
    var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 6,
    center: uluru
    });
    var marker = new google.maps.Marker({
    position: uluru,
    map: map
    });
    }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSYRVbN42T1OWgbp7D6U6azfAPji-RGI4&callback=initMap">
    </script>                                                 
    <div class="row">   
        <div class="col-sm-8">
            <div class="contact-form">
                <h2 class="title text-center">Formulario de Contacto </h2>
                <div class="status alert alert-success" style="display: none"></div>
                <form action="{{ route('mail') }}" name="contact-form" method="post">
                        {!! csrf_field() !!}
                    <div class="form-group col-md-6">
                        <input type="text" name="name" class="form-control" required="required" placeholder="Nombre">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" name="subject" class="form-control" required="required" placeholder="Titulo">
                    </div>
                    <div class="form-group col-md-12">
                        <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Mensaje"></textarea>
                    </div>                        
                    <div class="form-group col-md-12">
                        <input type="submit" name="submit" class="btn btn-primary pull-right" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="contact-info">
                <h2 class="title text-center">Información de Contacto</h2>
                @foreach($contactos as $contacto)
                <address>
                    <p>{{ $contacto->name }}</p>
                    <p>{{ $contacto->address }}</p>
                    <p>{{ $contacto->state }}</p>
                    <p>Telefono: {{ $contacto->phone }}</p>
                    <p>Email: <a href="mailto:{{ $contacto->mail }}">{{ $contacto->mail }}</a></p>
                </address>
                <div class="social-networks">
                    <h2 class="title text-center">Redes Sociales</h2>
                    <ul>
                        <li>
                            <a href="http://facebook.com/{{ $contacto->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="http://twitter.com/{{ $contacto->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="http://plus.google.com/{{ $contacto->google }}" target="_blank"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="http://youtube.com/channel/{{ $contacto->youtube }}" target="_blank"><i class="fa fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
                @endforeach
            </div>
        </div>        
    </div>
</div>
</div>
    @endsection