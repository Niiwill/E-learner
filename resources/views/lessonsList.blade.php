@extends('app')

@section('content')







    <div class="container">
        <h1 class="naslov">Lessons</h1>
        <div class=" col-md-12">
            <ul class="lessonsli">


                @foreach($lista as $li)
                {{--<a href="{{$id_lessTyp}}/less/{{$li->id}}"><li>{{$li->name}}</li></a>--}}

                    {{--{{ $li->user->first()->status or 'Incomplete' }}--}}


                        <a href="{{$id_lessTyp}}/less/{{$li->id}}"><li class="col-md-12">{{$li->name}}
                                <div class="{{ $li->user->first()->status or 'Incomplete' }}"></div></li></a>


                    </li>





                @endforeach

            </ul>
        </div>
    </div>









@endsection