@extends('layouts.LayoutFull')
@push('css')
@endpush

         
@section('conteudo')
   

      <div class="starter-template">
         
        <form action="" method="get">

          <div class="container">                     
            
                <div class="row mb-3">

                    <div class="col">
                    <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control">
                    </div>
                    </div>

                     
                    <div class="col">

                        <div class="form-group">
                         <label>CPF</label>                         
                        <input type="text" class="form-control" onkeypress="$(this).mask('000.000.000-00');">
                        </div>

                    </div>
                </div>
                    
            
                    
                    <div class="form-group">
                        <label>Endereço</label>
                        <input type="text" class="form-control">           
                        </div>
                        <div class="form-group">
                          <label>Email</label>
                          <input type="text" class="form-control">           
                          </div>
                


            <button class="btn btn-danger" type="submit">Concluido</button>
            <br><br>

            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                          <th>#</th>
                          <th>Header</th>
                          <th>Header</th>
                          <th>Header</th>                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1,001</td>
                          <td>Lorem</td>
                          <td>ipsum</td>
                          <td>dolor</td>
                          
                        </tr>
                        <tr>
                          <td>1,002</td>
                          <td>amet</td>
                          <td>consectetur</td>
                          <td>adipiscing</td>
                          
                        </tr>
                        <tr>
                          <td>1,003</td>
                          <td>Integer</td>
                          <td>nec</td>
                          <td>odio</td>
                          
                        </tr>
                        <tr>
                          <td>1,003</td>
                          <td>libero</td>
                          <td>Sed</td>
                          <td>cursus</td>
                          
                        </tr>                    
                        </tbody>
                </table>
            </div>
          </div>
        </form>
      </div>

  

@endsection

        
 

