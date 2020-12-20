<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class CriticalPathController extends Controller
{
   public function create()
   {
       return Inertia::render('CriticalPaths/Create');
   } 
}
