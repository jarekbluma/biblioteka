@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Biblioteka
                    
                    

                   

                </div>

                <div class="panel-body">



                    @if($borrowers -> count() === 0)
                        <h4 class="text-center">Brak wyników</h4>
                    @else


                              <div class="row">
                                <div>
                                        <table class="table table-striped">
                                            <thead>
                                              <tr>
                                            
                                                <th>Imię</th>
                                                <th>Nazwisko</th>
                                                <th>Email</th>
                                                <th>Wypożycz</th>

                                              </tr>
                                            </thead>
                                </div>            
                                   @foreach ($borrowers as $user) 
                                     <div>       
                                              <tbody>
                                                <tr>
                                                  
                                                  <td>{{ $user->name }}</td>
                                                  <td>{{ $user->surname }}</td>
                                                  <td>{{ $user->email }}</td>
                                                  <td><a class="btn btn-primary" href="{{ url('/rent/' . $user->id) }}">Wypożycz</a></td>
                                                  
                                                </tr>
                                              </tbody>                                           
                                      </div>      
                                   @endforeach
                                   @endif
                                   </table> 
                                </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
