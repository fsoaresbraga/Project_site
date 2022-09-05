<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Church;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $repo_church;

    public function __construct(Church $church) {
        $this->repo_church = $church;
    }
    public function index() {  

        $count_church = $this->repo_church::where('status',1)->count();
        
        return view('Admin.dashboard', compact('count_church'));
    }
}
