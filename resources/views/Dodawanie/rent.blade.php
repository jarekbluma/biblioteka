@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Wypozyczenie książki
                    <a class="btn btn-primary" href="{{ url('/home') }}">Powrót</a>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/rent/')}}">
                        {{ csrf_field() }}
                        

                        <div class="form-group">
                            <label class="col-md-4 control-label">Książka</label>

                            <div class="col-md-6">
                                <input id="tytul" type="text" class="form-control" name="tytul" value="{{ $rent -> tytul }}" required>
                            </div>
                        </div>

                       <div class="form-group">
                            <label class="col-md-4 control-label">Wypożyczający</label>

                            <div class="col-md-6">
                                <input id="autor" type="text" class="form-control" name="surname">
                                <a class="btn btn-primary" href="{{ url('/addrenter/') }}">Wybierz</a>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label">Data wypożyczenia</label>

                            <div class="col-md-6">
                                <input id="autor" type="date" class="form-control" name="date" value="{{ $rent -> dateofborrow }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Data zwrotu</label>

                            <div class="col-md-6">
                                <input id="autor" type="text" class="form-control" name="return" value="{{ $rent -> dateofreturn }}" readonly>
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
