<?php

namespace LaraDev\Http\Controllers\Admin;

use Illuminate\Http\Request;
use LaraDev\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index() {
        return json_encode(["entrou" => true]);
    }
}
