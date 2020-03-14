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
            <th>ID</th>           
            <th>Nome</th>
            <th>CPF</th>
            <th>Email</th>
            <th>Endereço</th>
            <th>Salvo?<th>
            <th>Ações</th>

          </tr>
        </thead>
        <tbody>
          @foreach($clients as $client)
          <tr>  
            <td>{{$client->id}}</td>          
          <td>{{$client->name}}</td>
            <td>{{$client->cpf}}</td>
            <td>{{$client->email}}</td>
            <td>{{$client->endereco}}</td>
            <td>{{$client->active_flag}}</td>
              <td>
                <a href="{{route('client.edit', [$client->id])}}" class="btn btn-success btn-sm active" role="button" aria-pressed="true">
                <i class="fal fa-pencil"></i>
                <span class='d-none d-md-inline'>Editar</span></a>
              </td>

            <td>
              <span data-url="{{ route('client.destroy',[ $client->id]) }}" data-idClient='{{ $client->id}}' class="btn btn-danger btn-xs text-white deleteButton">
                <i class="fal fa-trash"></i>
                <span class='d-none d-md-inline'> Deletar</span>
                </span>
                </td>

          </tr>    
          </tr>          
          @endforeach
          </tbody>
  </table>
  <a href="/CursoLaravel/public/client/create" class='btn btn-sm btn-success' type="submit">Adicionar</a>
  

  

@endsection

@push('scripts')
<script type="text/javascript" src="{{ asset('/js/toastr.min.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>



<script>
  $('.deleteButton').on('click', function (e) {
        var url = $(this).data('url');
        var idClient = $(this).data('idClient');
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
            method: 'DELETE',
            url: url
        });
        $.ajax({
            data: {
                'idClient': idClient,
            },
            success: function (data) {
                console.log(data);
                if (data['status'] ?? '' == 'success') {
                    if (data['reload'] ?? '') {
                        location.reload();
                    }
                } else {
                   console.log('error');
                }
            },
            error: function (data) {
                console.log(data);
            }
        });
  });

</script>


@endpush
 

