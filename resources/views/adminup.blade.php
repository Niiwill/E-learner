@extends('app')

@section('content')



<div class="containerProduction container container2">

    <form  class="form-horizontal forma" method="POST" action="" >
        <input type="hidden" name="_token" value="{{ csrf_token()}}">
        <fieldset>

            <!-- Form Name -->
            <legend class="text2">Upload a new lesson</legend>


            <!-- Select Basic -->
            <div class="form-group">
                <label class="control-label col-sm-2" for="lessontype">Lesson type</label>
                <div class="controls col-sm-10">
                    <select id="velicina_id" name="velicina_id" class="input-xlarge form-control">
                        <option value="1">HTML</option>
                        <option value="2">CSS</option>
                        <option value="3">JS</option>
                        <option value="4">Angular JS</option>
                        <option value="5">PHP</option>
                        <option value="6">Laravel</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="title">Title</label>
                <div class="controls col-sm-10">
                    <input id="title" name="title" type="text" placeholder="" class="input-xlarge form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="napomena">Posebna napomena</label>
                <div class="controls col-sm-10">
                    <textarea id="napomena" name="napomena" class="form-control "></textarea>
                </div>
            </div>



            <!-- Select Basic -->
            <div class="form-group">
                <label class="control-label col-sm-2" for="kolicina">Kolicina</label>
                <div class="controls col-sm-10">
                    <select id="kolicina" name="kolicina" class="input-xlarge form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>








            <!-- Button -->
            <div class="form-group ">
                <label class="control-label col-sm-2" for="submit"></label>
                <div class="controls col-sm-offset-3 col-sm-4">
                    <button id="submit" name="submit" class="btn btn-primary " onsubmit="lockoutSubmit(this)">Posalji</button>
                </div>
            </div>

        </fieldset>



        @if($errors->any())
            @foreach($errors->all() as $error )
                <ul class='alert alert-danger'>
                    <li>{{$error}}</li>
                </ul>

            @endforeach
        @endif

    </form>






@endsection