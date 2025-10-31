<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        // phân trang 10 dòng/trang
        $employees = Employee::latest()->paginate(10);
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'      => 'required|string|max:100',
            'position'  => 'nullable|string|max:100',
            'email'     => 'required|email:rfc,dns|unique:employees,email',
            'phone'     => 'nullable|string|max:20',
            'joined_at' => 'nullable|date',
        ]);

        Employee::create($validated);
        return redirect()->route('employees.index')->with('ok', 'Đã thêm nhân viên!');
    }

    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $validated = $request->validate([
            'name'      => 'required|string|max:100',
            'position'  => 'nullable|string|max:100',
            'email'     => 'required|email:rfc,dns|unique:employees,email,' . $employee->id,
            'phone'     => 'nullable|string|max:20',
            'joined_at' => 'nullable|date',
        ]);

        $employee->update($validated);
        return redirect()->route('employees.index')->with('ok', 'Đã cập nhật nhân viên!');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('ok', 'Đã xóa nhân viên!');
    }

    public function show(Employee $employee)
    {
        // optional: trang chi tiết
        return view('employees.show', compact('employee'));
    }
}
