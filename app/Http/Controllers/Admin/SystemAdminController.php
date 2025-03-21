<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SystemAdminController extends Controller
{
   public function showAdminDashboard() {
      return view('controlPanel.systemAdmin.dashboard');
   }
   public function CustomerMange(){
      return view('controlPanel.customer.dashboard');
   }
}
