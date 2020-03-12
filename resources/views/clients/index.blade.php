@extends('layouts.LayoutFull')
@push('css')
@endpush

         
@section('conteudo')
   

<div class="table-responsive">
  <table class="table table-striped table-sm">
      <thead>
          <tr>            
            <th>Nome</th>
            <th>CPF</th>
            <th>Email</th>
            <th>Ações</th>

          </tr>
        </thead>
        <tbody>
          @foreach($clients as $client)
          <tr>            
          <td>{{$client->cpf}}</td>
            <td>{{$client->name}}</td>
            <td>{{$client->email}}</td>
            <td><a href="#" class="btn btn-success btn-sm active" role="button" aria-pressed="true">Editar</a>
              <a href="#" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Excluir</a></td>
            
          </tr>
         
            
          </tr>
          
          @endforeach
          </tbody>
  </table>
  <div class='btn btn-sm btn-success' type="submit">Adicionar</div>
  

  

@endsection

        
 

