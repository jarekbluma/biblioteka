@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edycja
                    <a class="btn btn-primary" href="{{ url('/home') }}">Powrót</a>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/books/' . $edit -> id)}}">
                        {{ csrf_field() }}
                        {{ method_field('PATCH')}}
                        

                        <div class="form-group">
                            <label class="col-md-4 control-label">Tytuł</label>

                            <div class="col-md-6">
                                <input id="tytul" type="text" class="form-control" name="tytul" value="{{ $edit -> tytul }}" required>
                            </div>
                        </div>

                       <div class="form-group">
                            <label class="col-md-4 control-label">Autor</label>

                            <div class="col-md-6">
                                <input id="autor" type="text" class="form-control" name="autor" value="{{ $edit -> autor }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Wydawnictwo</label>

                            <div class="col-md-6">
                                <input id="wydawnictwo" type="text" class="form-control" name="wydawnictwo" value="{{ $edit -> wydawnictwo }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-md-4 control-label">Rok</label>

                            <div class="col-md-6">
                                <input id="rok" type="text" class="form-control" name="rok" value="{{ $edit -> rok }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-md-4 control-label">Data wypożyczenia</label>

                            <div class="col-md-6">
                                <input id="rok" type="date" class="form-control" name="dateofborrow" value="{{ $edit -> dateofborrow }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-md-4 control-label">Data zwrotu</label>

                            <div class="col-md-6">
                                <input id="rok" type="date" class="form-control" name="dateofreturn" value="{{ $edit -> dateofreturn }}" readonly>
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
