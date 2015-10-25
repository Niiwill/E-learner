@extends('app')

@section('content')







    <div class="container">
        <div class="col-md-offset-1 col-md-10">

                @foreach($lekcije as $lekcija)
                    <h1 class="naslov">{{$lekcija->name}} </h1>
            <div class="info col-md-12">
                @foreach($lista as $li)
                    <div class="status col-md-1">
                        <div class="statusicon"></div>
                    </div>

                    <div class="col-md-4 statustekst"><h5 style="float: left;">Status:</h5>
                        <div class="statusvalue">
                            <h5> {{$li->user->first()->status or 'Incomplete' }}</h5>
                        </div>
                    </div>


                @endforeach
                    <div class="col-md-7 check">
                        <a href="typ/{{$idLe}}"><div class="completeicon col-md-5"></div></a>

                        <h5 style="float: right; margin-right: 15px;margin-top: 15px;">Mark as complete</h5>
                    </div>
            </div>
                    <p>{{$lekcija->text}}</p><br><br>
                <iframe class="video"width="560" height="315" src="{{$lekcija->url1}}" frameborder="0" allowfullscreen></iframe>
                    <br><br><p>{{$lekcija->text}}</p>

                @endforeach

        </div>
    </div>










@endsection