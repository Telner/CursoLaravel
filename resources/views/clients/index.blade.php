@extends('layouts.LayoutFull')
@push('css')
@endpush
@if(Session::has('success'))
  toastr["success"]("<b>Sucesso: </b><br>{{ Session::get('success') }}");
@endif

         
@section('conteudo')
   

<div class="table-responsive">
  <table class="table table-striped table-sm">
      <thead>
          <tr>            
            <th>Nome</th>
            <th>CPF</th>
            <th>Email</th>
            <th>Endereço</th>
            <th>Ações</th>

          </tr>
        </thead>
        <tbody>
          @foreach($clients as $client)
          <tr>            
          <td>{{$client->name}}</td>
            <td>{{$client->cpf}}</td>
            <td>{{$client->email}}</td>
            <td>{{$client->endereco}}</td>
            <td><a href="#" class="btn btn-success btn-sm active" role="button" aria-pressed="true">Editar</a>
              <a href="#" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Excluir</a></td>
            
          </tr>
         
            
          </tr>
          
          @endforeach
          </tbody>
  </table>
  <a href="/CursoLaravel/public/client/create" class='btn btn-sm btn-success' type="submit">Adicionar</a>
  

  

@endsection

        
 

