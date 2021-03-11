<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutus() {
        $data = array ( 'nama' => 'Fitri Mutiara Devi',
                        'nim' => '1941720016',
                        'kelas' => 'TI-2E');
        return view ('about-us', $data);
    }
}
