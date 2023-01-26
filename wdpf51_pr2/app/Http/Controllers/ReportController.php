<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function report1()
    {
        #################### Report1

        $conn = DB::connection('mysqltwo');
        $data = $conn->table('offices')->where('country', 'USA')->get();
        // echo $data->count();
        // dd($data);
        return view('reports.report1', compact('data'));

        #################### Report2

        // $conn = DB::connection('mysqltwo');
        // $data = $conn->table('employees')->whereIn('officeCode', [1, 2, 3])->get();
        // dd($data);


        #################### Report3

        // $conn = DB::connection('mysqltwo');
        // $data = $conn->table('employees')->whereIn('officeCode', [1, 2, 3])->where('jobTitle', 'Sales Rep')->get();
        // dd($data);


        #################### Report4   With concat

        // $conn = DB::connection('mysqltwo');
        // $data = $conn->table('employees')->select(DB::raw('CONCAT(firstName," ",lastName) AS fullname'), 'email', 'jobTitle')->get();

        // dd($data);


        #################### Report5   With concat

        // $conn = DB::connection('mysqltwo');
        // $data = $conn->table('employees')->select(DB::raw('CONCAT(firstName," ",lastName) AS fullname'), 'email', 'jobTitle')->where(count('jobTitle'))->get();

        // dd($data);


        #################### Report6   With GroupBy

        // $conn = DB::connection('mysqltwo');
        // $data = $conn->table('employees')
        //     ->select('jobTitle', DB::raw('count(EmployeeNumber) as total'))
        //     ->groupBy('jobTitle')
        //     ->get();

        // dd($data);


        #################### Report7   With orWhere
        // $conn = DB::connection('mysqltwo');
        // $data = $conn->table('employees')->where('officeCode', 3)->orWhere('officeCode', 10)
        //     ->get();

        // dd($data);

        #################### Report8   With Where Between
        // $conn = DB::connection('mysqltwo');
        // $data = $conn->table('employees')->whereBetween('officeCode', [1, 3])->where('jobTitle', 'Sales Rep')->get();
        // dd($data);


        #################### Report9  With Where Between
        // $conn = DB::connection('mysqltwo');
        // $data = $conn->table('employees')->join('offices', 'employees.officeCode', '=', 'offices.officeCode')->select('employeeNumber', 'email', 'city', 'country')->get();

        // dd($data);
    }
}
