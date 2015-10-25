<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Lessontype;
use Illuminate\Support\Facades\View;
use App\Lesson;
use App\Ocena;
use Illuminate\Support\Collection;


class DashboardController extends Controller
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


    public function index()
    {

        $lectures = Lessontype::join('ocena', 'ocena.lessonTypeId', '=', 'lessontypes.id')
            ->where('userId', Auth::user()->id)
            ->groupBy('lessontypes.id')
            ->get(array('lessonTypeId'));

        $les=Lessontype::all('id');

        $data1 = array();
        $data2 = array();

        foreach ($lectures as $key => $value) {
            $data1[] = $value->lessonTypeId;
        }

        foreach ($les as $key => $value) {
            $data2[] = $value->id;
        }
        $data1;
        $data2;


        $collection1 = collect($data1);
        $collection2 = collect($data2);

        $diff=$collection2->diff($collection1);

        $data3 = array();

        foreach ($diff as $key => $value) {
            $data3[] = $value;
        }
        $data3;













        $users=Auth::user();
        $lessonNo=Lessontype::whereIn('id', $data3)->get();

         $lessonYes = Lessontype::join('ocena', 'lessontypes.id', '=', 'lessonTypeId')
            ->selectRaw('lessontypes.*, SUM(ocena.jedinica) as total')
            ->groupBy('lessontypes.id')
            ->get();




        return View::make ('dashboard',compact('users','les','lessonYes','lessonNo'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
