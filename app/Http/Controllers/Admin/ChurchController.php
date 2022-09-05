<?php

namespace App\Http\Controllers\Admin;

use App\Models\Church;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ChurchController extends Controller
{
    private $model_church;
    public function __construct(Church $church)
    {
        $this->model_church = $church;
    }

    public function index() {

        $churches = $this->model_church::with('daysWorship')->where('status', 1)->get();

        return response()->json(['churches' => $churches]);
        
        return view('Admin.Church.index', compact('churches'));
    }

    public function create() {

        return view('Admin.Church.create');
    }

    public function store(Request $request) {
        
        $validator = Validator::make($request->all(), [
            'code' => 'required',
            'name' => 'required',
            'city' => 'required',
            'state' => 'required|min:2|max:2'
        ]);

        if ($validator->fails()) {

            $notification = array(
                'message' => 'Verifique os Campos',
                'alert-type' => 'info'
            );

            return back()->with($notification)->withInput()->withErrors($validator->errors());
        }
        

        $church =  $this->model_church::create([
            'user_id' => auth()->user()->id,
            'code' => $request->code,
            'name' => $request->name,
            'city' => $request->city,
            'state' => $request->state,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'phone' => $request->phone,
            'status'=> 1
        ]);

        $days_worship = $church->daysWorship()->create([
            'Sunday' => $request->Sunday,
            'youth_meeting' => $request->day_young,
            'Tuesday' => $request->Tuesday,
            'Wednesday' => $request->Wednesday, 
            'Thursday' => $request->Thursday, 
            'friday' => $request->friday, 
            'saturday' => $request->saturday
        ]);

        if($church && $days_worship) {
            $notification = array(
                'message' => 'Casa de Oração Criada.',
                'alert-type' => 'success'
            );
            return redirect()->route('admin.church.index')->with($notification);
        }
        
        $notification = array(
            'message' => 'Não foi Possivel criar casa Oração.',
            'alert-type' => 'info'
        );
        return back()->with($notification);
    }

    public function show($id) {

        $church = $this->model_church::
                    with('daysWorship')
                    ->where('status', 1)
                    ->find($id);

        if($church) {

            return view('Admin.Church.show', compact('church'));
        }

        $notification = array(
            'message' => 'Casa Oração não Encontrada.',
            'alert-type' => 'info'
        );

        return redirect()->route('admin.church.index')->with($notification);
    }



    public function update($id, Request $request) {

        $validator = Validator::make($request->all(), [
            'code' => 'required',
            'name' => 'required',
            'city' => 'required',
            'state' => 'required|min:2|max:2'
        ]);

        if ($validator->fails()) {

            $notification = array(
                'message' => 'Verifique os Campos',
                'alert-type' => 'info'
            );

            return back()->with($notification)->withInput()->withErrors($validator->errors());
        }

        $church = $this->model_church::
                    with('daysWorship')
                    ->where('status', 1)
                    ->find($id);
        
        if($church) {

            $church->update([
                'user_id' => auth()->user()->id,
                'code' => $request->code,
                'name' => $request->name,
                'city' => $request->city,
                'state' => $request->state,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
                'phone' => $request->phone,
                'status'=> 1
            ]);

            $church->daysWorship()->update([
                'Sunday' => $request->Sunday,
                'youth_meeting' => $request->day_young,
                'Tuesday' => $request->Tuesday,
                'Wednesday' => $request->Wednesday, 
                'Thursday' => $request->Thursday, 
                'friday' => $request->friday, 
                'saturday' => $request->saturday
            ]);

            
            $notification = array(
                'message' => 'Casa de Oração Editada.',
                'alert-type' => 'success'
            );

            return redirect()->route('admin.church.index')->with($notification);
        }

        $notification = array(
            'message' => 'Casa Oração não Encontrada.',
            'alert-type' => 'info'
        );
        return redirect()->route('admin.church.index')->with($notification);
    }
}
