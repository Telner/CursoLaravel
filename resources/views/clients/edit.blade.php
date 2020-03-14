@extends('layouts.LayoutFull')
@push('css')
@endpush

         
@section('conteudo')
   @if ($errors->any())
   <div class="alert alert-secondary text-danger">
     <ul>
       @foreach($errors->all() as $errors)
        <li>{{$errors}}</li>
        @endforeach
     </ul>
   </div>
   @endif

      <div class="starter-template">
         
      <form method="POST" action="{{route('client.update',[$client->id])}}" class="form-horisontal form-validate">
        {{csrf_field()}}
        @method('PUT')


          <div class="container">                     
            
                <div class="row mb-3">
                  
                  <div class="col">
                  <div class="form-group">
                    <label>Nome</label>
                    <input id='name' name='name' type="text" class="form-control" value="{{old("name",$client->name)}}">
                    
                    
                    </div>
                    </div>

                     
                    <div class="col">

                        <div class="form-group">
                         <label>CPF</label>                         
                        <input id='cpf' name='cpf' type="text" class="form-control cpf"  value="{{old("cpf",$client->cpf)}}">
                        </div>

                    </div>
                </div>
                    
            
                    
                    <div class="form-group">
                        <label>Endereço</label>
                        <input id='endereco' name='endereco' type="text" class="form-control" value="{{old("endereco", $client->endereco)}}">           
                        </div>
                        <div class="form-group">
                          <label>Email</label>
                          <input id='email' name='email' type="text" class="form-control" value="{{old("email", $client->email)}}">                                     
                          </div>
                          
                          <label>  Você aceita jesus em sua vida?</label><br>
                          <label>  Sim</label>
                          <input type="checkbox" id='active_flag' name='active_flag' class="form-controls" @if($client->active_flag) checked='checked' @endif><br>
                          
                          
                

                          <br><br>
            <input class="btn btn-danger" type="submit">
            <br><br>

           
            </div>
          </div>
        </form>
      </div>

  

@endsection

@push('scripts')
<script type="text/javascript" src="{{ asset('/js/toastr.min.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
<script>
    $('.cpf').mask('000.000.000-00');
</script>
@endpush

        
 

