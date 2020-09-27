<?php

namespace Boltnut2020\PhpunitWeb;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PhpunitWebController extends Controller
{
    //
    public function index() {
        exec('cd ' . base_path() . ' && vendor/bin/phpunit -v', $output);
        return "<pre>" . implode("\n", $output) . "</pre>";
    }
}
