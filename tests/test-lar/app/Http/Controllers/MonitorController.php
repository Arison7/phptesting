<?php

namespace App\Http\Controllers;

use App\Models\Monitor;
use Illuminate\Http\Request;

class MonitorController extends Controller
{
    function store(Request $request)
    {
        $validated = $request->validate([
            'value_goal' => 'required|integer',

        ]);
        $validated['user_id'] = 1;
        $monitor = Monitor::create($validated);

        foreach ($request->input('powerplants') as $powerplant) {
            $monitor->powerplants()->attach($powerplant);
        }

        $monitor->save();
        
        return view('monitors.show',['monitor' => $monitor]);
    }
    function destroy(Monitor $monitor)
    {
        $monitor->delete();
        return redirect()->route('index');
    }


}
