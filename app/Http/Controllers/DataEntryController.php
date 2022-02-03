<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataEntry;

class DataEntryController extends Controller
{
    public function Insert(Request $request)
    {
        $data = new DataEntry();
        $data->run = $request->input('run');
        $data->wicket = $request->input('wicket');
        $data->ball = $request->input('ball');
        $data->save();
        return response()->json(['data'=>$data,'msg'=>'Data entered successfully']);
    }

    public function GetData(Request $request)
    {
        $data = DataEntry::all();
        return response()->json($data);
    }
}
