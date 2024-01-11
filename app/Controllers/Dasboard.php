<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Dasboard extends BaseController
{
    public function index()
    {
        return view('Dasboard');
    }
    public function chartjs()
    {
        return view('pages/charts/chartjs');
    }
    public function flot ()
    {
    return view ('pages/charts/flot');
    }
    public function inline() 
    {
    return view ('pages/charts/inline');
    }
    public function uplot()
    {
      return view ('pages/charts/uplot');
    }
    public function general()
    {
      return view ('pages/UI/general');
    }
    public function navbar()
    {
      return view ('pages/UI/navbar');
    }
    public function timeline()
    {
      return view ('pages/UI/timeline');
    }
    public function ribbons()
    {
      return view ('pages/UI/ribbons');
    }
    
}
