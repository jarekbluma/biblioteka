@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Biblioteka
                          
                    <a class="btn btn-primary" href="{{ url('/books') }}">Dodaj książkę do biblioteki</a>
                    <a class="btn btn-primary" href="{{ url('/borrowers') }}">Dodaj wypożyczającego</a>

                </div>

                <div class="panel-body">





                     @if($books->count() === 0)
                        <h4 class="text-center">Brak wyników</h4>
                     @else
                    
                        <div class="row">
                                <div>
                                        <table class="table table-striped">
                                            <thead>
                                              <tr>
                                                <th>Tytuł</th>
                                                <th>Autor</th>
                                                <th>Wydawnictwo</th>
                                                <th>Rok</th>
                                                <th>Edycja</th>
                                              </tr>
                                            </thead>
                                </div>            
                                   @foreach ($books as $book) 
                                   <div>       
                                            <tbody>
                                              <tr>
                                                <td>{{ $book->tytul }}</td>
                                                <td>{{ $book->autor }}</td>
                                                <td>{{ $book->wydawnictwo }}</td>
                                                <td>{{ $book->rok }}</td>
                                                <td><a class="btn btn-primary" href="{{ url('/borrowers') }}">Edytuj</a></td>
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
