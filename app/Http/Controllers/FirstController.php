<?php


namespace App\Http\Controllers;


class FirstController extends Controller
{

    public function product()
    {
        return view("first/product");
    }

    public function news($id)
    {
        return view("first/news", compact("id"));
    }

    public function program()
    {
        return view("first/program");
    }

    public function about()
    {
        return view("first/about");
    }

}
