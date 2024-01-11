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
    public function icons()
    {
      return view ('pages/UI/icons');
    }
    public function buttons()
    {
      return view ('pages/UI/buttons');
    }
    public function sliders()
    {
      return view ('pages/UI/sliders');
    }
    public function modals()
    {
      return view ('pages/UI/modals');
    }
}
