<?php

namespace RakutenShop\Http\Controllers;

use Hash;
use Auth;
use Redirect;
use Session;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use RakutenShop\Models\User;
use RakutenShop\Models\Category;
use RakutenShop\Services\Rakuten;

class ShopController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function showShop()
    {
        // first of all, we will get genres from database
        // to check that it exist or not
        $genres =  Category::all();
        // if we didn't yet save genres into database,
        // we will get it again from rakuten and save it
        if(count($genres) == 0){
            $rakutenSrv = new Rakuten();
            $genres = $rakutenSrv->getAllGenres();
            // insert all of genres into database
            Category::insert($genres);
        }
        //now, we already have genres list, we will process this data before send to views

        
        // show the form
        return view('shop',["categories"=>$genres]);
    }
}
