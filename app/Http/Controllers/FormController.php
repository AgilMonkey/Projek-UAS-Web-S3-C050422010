<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormRequest;
use App\Http\Requests\UpdateFormRequest;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $forms = DB::table('forms')
            ->when($request->input('name'), function ($query, $name) {
                return $query->where('name', 'like', '%' . $name . '%');
            })
            ->select('id', 'first_name', 'last_name', 'username', 'email', 'password', 'alamat', 'provinsi', 'negara', 'kode_post', 'handphone', 'captcha', DB::raw('DATE_FORMAT(created_at, "%d %M %Y")
             as created_at'))
            ->orderBy('id', 'desc')
            ->paginate(15);
        return view('pages.form.index', compact('forms'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.form.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFormRequest $request)
    {
        Form::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'alamat' => $request['alamat'],
            'provinsi' => $request['provinsi'],
            'negara' => $request['negara'],
            'kode_post' => $request['kode_post'],
            'handphone' => $request['handphone'],
            'captcha' => $request['captcha'],
        ]);

        return redirect(route('form.index'))->with('success', 'data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Form $form)
    {
        return view('pages.form.edit')->with('form', $form);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFormRequest $request, Form $form)
    {
        $validate = $request->validated();
        $form->update($validate);
        return redirect()->route('form.index')->with('success', 'Edit Form Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Form $form)
    {
        $form->delete();
        return redirect()->route('form.index')->with('success', 'Delete Form Successfully');

    }
}
