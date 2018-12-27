<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 12/16/2018
 * Time: 10:10 PM
 */
namespace Pc\Custom;

use App\Http\Controllers\Controller;

class CustomController extends Controller
{

    public function index($timezone)
    {
        dump(config("database.connections"));
    }

}