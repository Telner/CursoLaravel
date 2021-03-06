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
         
      <form method="POST" action="{{route('client.store')}}" class="form-horisontal dorm-validate">
        {{csrf_field()}}


          <div class="container">                     
            
                <div class="row mb-3">
                  
                  <div class="col">
                  <div class="form-group">
                    <label>Nome</label>
                    <input id='name' name='name' type="text" class="form-control" value="{{old("name")}}">
                    
                    
                    </div>
                    </div>

                     
                    <div class="col">

                        <div class="form-group">
                         <label>CPF</label>                         
                        <input id='cpf' name='cpf' type="text" class="form-control" onkeypress="$(this).mask('000.000.000-00');" value="{{old("cpf")}}">
                        </div>

                    </div>
                </div>
                    
            
                    
                    <div class="form-group">
                        <label>Endereço</label>
                        <input id='endereco' name='endereco' type="text" class="form-control" value="{{old("endereco")}}">           
                        </div>
                        <div class="form-group">
                          <label>Email</label>
                          <input id='email' name='email' type="text" class="form-control" value="{{old("email")}}">                                     
                          </div>
                          
                          <label>  Você aceita jesus em sua vida?</label><br>
                          <label>  Sim</label>
                          <input type="checkbox" id='active_flag' name='active_flag' class="form-controls" ><br>
                          
                

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
@endpush

        
 

