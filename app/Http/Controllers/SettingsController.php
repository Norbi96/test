<?php

namespace App\Http\Controllers;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    
    public function show($id)
    {
        $beallitasok = Settings::find($id);
        return view('settings.show', compact('beallitasok')); 
    }
    

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Settings  $settings
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Settings $beallitasok)
    {
        $request->validate([
            'under_construction' => 'required',
            'lock_admin' => 'required',
            'company_address' => 'required',
            'company_leader' => 'required',
        ]);
        
        $beallitasok->fill($request->post())->save();

        return redirect()->route('workers.index')->with('success','Sikeres frissítés!');
    }


}
