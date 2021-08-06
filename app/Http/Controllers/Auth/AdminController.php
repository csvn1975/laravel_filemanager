<?php
    namespace App\Http\Controllers\Auth;

    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;

    class AdminController extends Controller
    {
        public function __construct()
        {
            # dd('AdminController');
            $this->middleware('auth:admin');
        }

        public function index()
        {
            return view('admin.dashboard');
        }
    }
