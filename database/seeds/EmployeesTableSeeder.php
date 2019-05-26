<?php

use App\Employee;
use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee = new Employee();
        $employee->id = 1;
        $employee->code = 0001;
        $employee->name = 'Nông Đức Huy';
        $employee->dob = '1995/09/16';
        $employee->gender = 'Nam';
        $employee->phone = '0120403040';
        $employee->id_card_number = '030486394';
        $employee->email = 'huy@gmail.com';
        $employee->address = 'Lạng Sơn';
        $employee->save();
    }
}
