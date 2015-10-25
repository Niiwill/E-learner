<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Redirect;
use App\Lessontype;
use App\Ocena;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
Use App\Lesson;

class LessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index($id_lessTyp)
    {



        $lista = Lesson::where('id_lessontype', $id_lessTyp)
            ->with(['user' => function ($q) {
                $q->where('users.id', Auth::user()->id);
            }])
            ->get();





        return view('lessonsList',compact('lista', 'id_lessTyp')) ;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function lesson($id_lessTyp,$id_less)
    {

        $lekcije=Lesson::where('id', $id_less)->get();


 $lista = Lesson::where('id', $id_less)
            ->with(['user' => function ($q) {
                $q->where('users.id', Auth::user()->id);
            }])
            ->get();

        $userId=Auth::user()->id;
        $idLe=$id_less;


        return view('lesson',compact('lekcije','userId','idLe','lista','id_lessTyp'));
    }


    public function store($id_lessTyp,$idTyp)
    {


            $user = Auth::user();
            $lessonid= $idTyp;
            $user->lesson()->attach($lessonid, ['status_id' => 1]);




        $ocena['lessonTypeId'] = $id_lessTyp;
        $ocena['jedinica'] = "10";
        $ocena['userId'] = Auth::id();
        Ocena::create($ocena);





        return Redirect::to("/");


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
