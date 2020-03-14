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
         
      <form method="POST" action="{{route('book.store')}}" class="form-horisontal dorm-validate">
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
                         <label>Autor</label>                         
                         <input id='writer' name='writer' type="text" class="form-control" value="{{old("writer")}}">
                        </div>

                    </div>
                </div>                    
            
                    
                    <div class="form-group">
                    <label>Quantas Paginas ?</label>
                    <input id='pages' name='pages' type="text" class="form-control" value="{{old("pages")}}">           
                    </div>
                        
                          
                

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

        
 

