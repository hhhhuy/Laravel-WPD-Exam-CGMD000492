<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::all();
        return view('groups.index', compact('groups'));
    }

    public function create()
    {
        return view('groups.create');
    }

    public function store(Request $request)
    {
        $group = new Group();
        $group->name = $request->input('name');
        $group->save();

        Session::flash('success', 'Thêm thành công nhóm');
        return redirect()->route('groups.index');
    }

    public function edit($id)
    {
        $group = Group::findOrFail($id);
        return view('groups.edit',compact('group'));
    }

}
