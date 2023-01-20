<?php

namespace App\Http\Controllers;

use App\Models\Mutator;
use Illuminate\Http\Request;

class MutatorController extends Controller
{
    public function index()
    {
        $mutator = Mutator::all();
        return $mutator;
    }
}
