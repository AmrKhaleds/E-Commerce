<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LanguageRequest;
use Illuminate\Http\Request;
use App\Models\Language;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $getLanguage = Language::select()->paginate(DEFAULT_PAGINATION);
        return view('admin.languages.index', compact('getLanguage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.languages.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param $request 
     */
    public function store(LanguageRequest $request)
    {
        if(empty($request->has('active'))){
            $request['active'] = "0";
        }
        // return $request;
        $createLanguage = Language::create($request->except(['_token']));
        if (!$createLanguage)
        {
            return redirect()->route('admin.languages.index')->with(['error' => 'Can\'t Create Language!']);
        }
        else
        {
            return redirect()->route('admin.languages.index')->with(['success' => 'Language Added successfully']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $getLanguage = Language::select()->find($id);
        if (!$getLanguage){
            return redirect()->route('admin.languages.index')->with(['error' => 'Language Not Exist']);
        }else{
            return view('admin.languages.edit', compact('getLanguage'));
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if(empty($request->has('active'))){
            $request['active'] = "0";
        }
        // return $request;
        $getLanguage = Language::select()->find($id);
        if (!$getLanguage){
            return redirect()->route('admin.languages.edit', $id)->with(['error' => 'Language Not Exist']);
        }else{
            $getLanguage->update($request->except('_token'));
            return redirect()->route('admin.languages.index')->with(['success' => 'Language Updated successfully']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteLanguage = Language::find($id);
        if ($deleteLanguage){
            $deleteLanguage->delete();
            return redirect()->route('admin.languages.index')->with(['success' => "{$deleteLanguage->name} Deleted Successfully."]);
        }else{
            return redirect()->route('admin.languages.index')->with(['error' => 'There\' Error occurred.']);
            // echo "Done";
        }
    }
}
