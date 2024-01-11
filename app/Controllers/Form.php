<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Form extends BaseController
{
    public function general()
    {
      return view ('pages/forms/general');
    }
    public function advanced()
    {
      return view ('pages/forms/advanced');
    }
    public function editors()
    {
      return view ('pages/forms/editors');
    }
    public function validation()
    {
      return view ('pages/forms/validation');
    }
}
