<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Password;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email:rfc',
                'password' => ['required', Password::min(8)->mixedCase()->numbers()],
                'name' => 'required|alpha:ascii',
                'float' => 'required|numeric|between:2.50,99.99',
                'image' => 'required|max:2048|mimes:jpg,jpeg,png'
            ]
        );

        $filename = time() . '_' . $request->image->getClientOriginalName();

//        $request->image->storeAs('public/images', $filename);
        $path = Storage::putFileAs(
            'public/gambar',
            $request->image,
            $filename
        );

        $results = [
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'name' => $request->name,
            'float' => $request->float,
            'file' => $path,
        ];

        Form::create($results);

//        $form = new Form();
//
//        $form->password = Hash::make($request->password);
//        $form->email = $request->email;
//        $form->name = $request->name;
//        $form->float = $request->float;
//        $form->file = $path;
//
//        $form->save();

        return redirect()->back()->with(['status' => 'Form submitted!']);
    }

    public function result(string $id)
    {
        $form = Form::where('id', $id)->first();
        $results = [
            'email' => $form->email,
            'name' => $form->name,
            'float' => $form->float,
            'file' => $form->file
        ];

        return view('result', [
            'results' => $results
        ]);
    }
}
