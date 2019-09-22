<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('products/products');
    }

    public function carga(Request $request)
    {   

        try {
            $product = $request->all();
            DB::table('products')->insert(
                $product
            );
         
            $rta=["code"=>200,"data"=>"Insertado Correctamente"];
            return response()->json($rta);
        } catch (Exception $e) {
            $rta=["code"=>$e->getCode(),"error"=>$e->getMessage()];
            return response()->json($rta);
        }
        //$post = Post::create($request->all());

        
    }


    



}
