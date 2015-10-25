@extends('app')

@section('content')


<div class="container">
    <div class="row lekcije">
    @foreach( $lessonYes as $less)
    <a href="lessTyp/{{$less->id}}">
    <div class="col-sm-3">
    <div class="tile-progress {{$less->color}}">
    <div class="tile-header">



    <h3>{{$less->name}}</h3>


    <span>so far in our blog, and our website.</span>
    </div>
    <div class="tile-progressbar">
    <span data-fill="{{$less->total}}" style="width: {{$less->total}}%;"></span>
    </div>
    <div class="tile-footer">
    <h4>
    <span class="pct-counter">{{$less->total}}</span>% completed
    </h4>
    <span>so far in our course and our website</span>
    </div>
    </div>
    </div>
    </a>
    @endforeach
        @foreach( $lessonNo as $lessNo)
            <a href="lessTyp/{{$lessNo->id}}">
                <div class="col-sm-3">
                    <div class="tile-progress {{$lessNo->color}}">
                        <div class="tile-header">



                            <h3>{{$lessNo->name}}</h3>


                            <span>so far in our blog, and our website.</span>
                        </div>
                        <div class="tile-progressbar">
                            <span data-fill="0" style="width: 0%;"></span>
                        </div>
                        <div class="tile-footer">
                            <h4>
                                <span class="pct-counter">0</span>% completed
                            </h4>
                            <span>so far in our course and our website</span>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach


    </div>
</div>



@endsection