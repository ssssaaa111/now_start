<?php

namespace App\Http\Controllers;

use App\Appointment;
use Gate;
use Illuminate\Http\Request;

/**
 * Class AppointmentController
 * @package App\Http\Controllers
 */
class AppointmentController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return void
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'publisher_id' => 'required',
            'start_time' => 'required',
            'publisher_timezone' => 'required',
        ]);
        session()->flash('message', 'your post has been published');
        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );
        return redirect('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        auth()->loginUsingId(1);

        $appointments = Appointment::findOrFail($id);

        //E1
        /*if (Gate::denies('update-post', $appoints)) {
            abort(403, "sorry, bad request???");
        }*/

        //E2
        //$this->authorize('update-post', $appoints);

        //E3

        /*if (auth()->user()->can('update-post', $appointments)){
            dd(111);
        }
        else{
            dd($appointments);
        }*/

        return view('test', compact('appointments'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Appointment $appointment
     * @return bool
     */
    public function update(Appointment $appointment)
    {
        if ($appointment->user_id == 0) {
            $appointment->user_id = auth()->id();
            $response = $appointment->save();
            return response()->json($response);
        }else{
            return response()->json(false);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
