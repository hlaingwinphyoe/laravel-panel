<?php

namespace App\Http\Controllers;

use App\DataTables\UserDataTable;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function buttons()
    {
        return view('buttons.index');
    }

    public function tables(UserDataTable $dataTable)
    {
        return $dataTable->render('tables.index');
    }
}
