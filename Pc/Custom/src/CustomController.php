<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 12/16/2018
 * Time: 10:10 PM
 */
namespace Pc\Custom;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class CustomController extends Controller
{

    public function index($timezone)
    {
        echo Carbon::now($timezone)->toDateTimeString();

        dump(config("database.connections"));
    }

}