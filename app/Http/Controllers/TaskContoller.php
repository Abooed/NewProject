<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = DB::table('tasks')->get();

        return view('contact', compact('tasks'));
    }
}
