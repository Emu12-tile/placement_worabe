<?php

namespace App\Http\Controllers;

use App\Models\HR;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HRController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $hrs = HR::latest()->paginate(5);
        return view('resource.lowIndex', compact('hrs'));
    }
}
