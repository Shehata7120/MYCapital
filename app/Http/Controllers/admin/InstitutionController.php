<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\InstitutionsRequest;
use App\Models\Institution;
use App\Trait\InstitutionTypeTrait;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class InstitutionController extends Controller
{
    use InstitutionTypeTrait;
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $institutions = Institution::with('type:id,name')->orderByDesc('id')->get();
        return  view('admin.institutions.index', compact('institutions'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
      $types =  $this->institutionType();
        return  view('admin.institutions.create' , compact('types'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param InstitutionsRequest $request
     * @return RedirectResponse
     */
    public function store(InstitutionsRequest $request): RedirectResponse
    {
        Institution::create($request->all());
        toast('Institution created successfully', 'success');
        return redirect()->route('institutions.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $institution = Institution::find($id);
        return view('admin.institutions.show', compact('institution'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $institution = Institution::find($id);
        $types =  $this->institutionType();
        return view('admin.institutions.edit', compact('institution'), compact('types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(InstitutionsRequest $request, $id)
    {
        $institution = Institution::find($id);
        $institution->update($request->all());
        toast('Institution updated successfully', 'success');
        return redirect()->route('institutions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $institution = Institution::find($id);
        $institution->delete();
        return redirect()->route('institutions.index');

    }
}
