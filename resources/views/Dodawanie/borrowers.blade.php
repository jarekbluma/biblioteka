@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dodawanie wypożyczającego do bazy
                    <a class="btn btn-primary" href="{{ url('/home') }}">Powrót</a>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/borrowers/')}}">
                        {{ csrf_field() }}
                        

                        <div class="form-group">
                            <label class="col-md-4 control-label">Imię</label>

                            <div class="col-md-6">
                                <input id="tytul" type="text" class="form-control" name="name" required>
                            </div>
                        </div>

                       <div class="form-group">
                            <label class="col-md-4 control-label">Nazwisko</label>

                            <div class="col-md-6">
                                <input id="autor" type="text" class="form-control" name="surname">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Zapisz
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
