<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Group;
use App\Http\Requests\ValidateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('welcome');
    }

    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::all();
        return view('employees.create', compact('groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidateRequest $request)
    {
        $employee = new Employee();
        $employee->code = $request->input('code');
        $employee->group_id = $request->input('group_id');
        $employee->name = $request->input('name');
        $employee->dob = $request->input('dob');
        $employee->gender = $request->input('gender');
        $employee->phone = $request->input('phone');
        $employee->id_card_number = $request->input('id_card_number');
        $employee->email = $request->input('email');
        $employee->address = $request->input('address');
        $employee->save();
        Session::flash('success', 'Tạo mới nhân viên thành công');
        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        $groups = Group::all();
        return view('employees.edit', compact('employee', 'groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidateRequest $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->code = $request->input('code');
        $employee->group_id = $request->input('group_id');
        $employee->name = $request->input('name');
        $employee->dob = $request->input('dob');
        $employee->gender = $request->input('gender');
        $employee->phone = $request->input('phone');
        $employee->id_card_number = $request->input('id_card_number');
        $employee->email = $request->input('email');
        $employee->address = $request->input('address');
        $employee->save();
        Session::flash('success', 'Cập nhật thông tin nhân viên thành công');
        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        Session::flash('success', 'Đã xóa nhân viên');
        return redirect()->route('employees.index');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        if (!$keyword) {
            return redirect()->route('employees.index');
        }
        $employees = Employee::where('name', 'LIKE', '%' . $keyword . '%')->get();
        $groups = Group::all();
        return view('employees.index', compact('employees','groups'));
    }
}
