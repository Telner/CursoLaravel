<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

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
       $clientModel = app(Client::class);
       $client = $clientModel->create(
           [
               'name'=>'klebin Foguete', 'cpf'=>11122233345, 'email'=>'cocopretopreto@hotmail.com', 'active_flag'=>false,
           ]
       ); 
       dd($client);
    }
}
