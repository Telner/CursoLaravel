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
            <th>Escritor</th>
            <th>Paginas</th>            
          

          </tr>
        </thead>
        <tbody>
          @foreach($book as $book)
          <tr>  
            <td>{{$book->id}}</td>          
            <td>{{$book->name}}</td>
            <td>{{$book->writer}}</td>
            <td>{{$book->pages}}</td>
            <td>
              <a href="{{route('book.edit', [$book->id])}}" class="btn btn-success btn-sm active" role="button" aria-pressed="true">
              <i class="fal fa-pencil"></i>
              <span class='d-none d-md-inline'>Editar</span></a>
            </td>

          <td>
            <span data-url="{{ route('book.destroy',[ $book->id]) }}" data-idBook='{{ $book->id}}' class="btn btn-danger btn-xs text-white deleteButton">
              <i class="fal fa-trash"></i>
              <span class='d-none d-md-inline'> Deletar</span>
              </span>
              </td>

        </tr>    
        </tr>          
        @endforeach
        </tbody>
</table>
<a href="{{route('book.create')}}" class='btn btn-sm btn-success' type="submit">Adicionar</a>




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


