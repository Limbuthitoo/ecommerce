<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::first();
        return view('admin.company.index',compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = new Company();
        $company->name = $request->name;
        $company->address = $request->address;
        $company->contact = $request->contact;
        $company->email = $request->email;
        $company->facebook = $request->facebook;
        $company->youtube = $request->youtube;
        $company->linkedin = $request->linkedin;
        $company->twitter = $request->twitter;
        $company->instagram = $request->instagram;

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $newName = time() . "." . $file->getClientOriginalExtension();
            $file -> move("images",$newName);
            $company->logo="images/$newName";
        }
        $company->save();
        return redirect("/company");
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
        $company = Company::find($id);
        return view('admin.company.edit',compact('company'));
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
        $company = Company::find($id);
        $company->name = $request->name;
        $company->address = $request->address;
        $company->contact = $request->contact;
        $company->email = $request->email;
        $company->facebook = $request->facebook;
        $company->youtube = $request->youtube;
        $company->linkedin = $request->linkedin;
        $company->twitter = $request->twitter;
        $company->instagram = $request->instagram;

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $newName = time() . "." . $file->getClientOriginalExtension();
            $file -> move("images",$newName);
            $company->logo="images/$newName";
        }
        $company->update();
        return redirect("/company");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::find($id);
        $company->delete();
        return redirect('/company');
    }
}
