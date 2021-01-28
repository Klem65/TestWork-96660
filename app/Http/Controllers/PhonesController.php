<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhonesController extends Controller
{
    public function index()
    {
        $phone = new Phone();
        return view('index', ['phones' => $phone->all()]);
    }

    public function create(Request $request)
    {
        $validation = $request->validate(['name' => 'required|max:50', 'phone' => 'required|max:12|']);
        $phone = new Phone();
        $phone->name = $request->name;
        $phone->number = $request->phone;
        $phone->save();
        return redirect()->route('home');
    }

    public function edit(Request $request)
    {
        return redirect()->route('edit');
    }

    public function update(Request $request)
    {
        $validation = $request->validate(['name' => 'required|max:50', 'phone' => 'required|max:12|']);
        Phone::where('id', $request->id)
        ->update(['name' => $request->name, 'number' => $request->phone]);
        return redirect()->route('home');
    }

    public function delete($id)
    {
        $phone = new Phone();
        $phone->destroy($id);
        return redirect()->route('home');
    }
}
