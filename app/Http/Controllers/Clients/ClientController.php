<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Requests\ClientStoreRequest;

class ClientController extends Controller
{
    public function index()
    {
        $clientModel = app(Client::class);
        $clients = $clientModel->all();
        //$clients = $clientModel->find(1);
        //$clients = $clientModel->where('cpf',11122233345)->get();
        //dd($clients);
        return view('clients/index',compact('clients'));



        //return view('Painel.Products.ProductCrud', compact('productCategories', 'productFormats', 'Product'));
    }
    public function create()
    {
        //    $client = $clientModel->create(
            //    $clientModel = app(Client::class);
            //        [
                //            'name'=>'klebin Foguete', 'cpf'=>11122233345, 'email'=>'cocopretopreto@hotmail.com', 'active_flag'=>false,
    //        ]
    //    ); 
       return view('clients/create');
    }
    public function store(ClientStoreRequest $request)
    {       
        $data = $request->all();
     
        $clientModel = app(Client::class);
        $client = $clientModel->create(       
         [
          'name'=>$data['name'],
          'cpf'=>preg_replace("/[^A-Za-z0-9]/", '',$data['cpf']),
          'email'=>$data['email'], 
          'active_flag'=>isset($data['active_flag']) ? true : false,
          'endereco'=>$data['endereco']??null,
         ]
       ); 
   return redirect()->route('client.index');
        
    }
}
