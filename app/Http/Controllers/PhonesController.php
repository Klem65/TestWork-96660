<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

/**
 * PhonesController
 */
class PhonesController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $phone = new Phone();
        return view('index', ['phones' => $phone->all()]);
    }

    /**
     * create
     *
     * @param  mixed $request
     * @return void
     */
    public function create(Request $request)
    {
        $validation = $request->validate(['name' => 'required|max:50', 'phone' => 'required|max:12|']);
        $phone = new Phone();
        $phone->name = $request->name;
        $phone->phone = $request->phone;
        $phone->save();
        return redirect()->route('home');
    }

    /**
     * update
     *
     * @param  mixed $request
     * @return void
     */
    public function update(Request $request)
    {
        $validation = $request->validate(['name' => 'required|max:50', 'phone' => 'required|max:12|']);
        Phone::where('id', $request->id)
        ->update(['name' => $request->name, 'phone' => $request->phone]);
        return redirect()->route('home');
    }

    /**
     * delete
     *
     * @param  mixed $id
     * @return void
     */
    public function delete($id)
    {
        $phone = new Phone();
        $phone->destroy($id);
        return redirect()->route('home');
    }
}
