@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dodawanie książki do bazy</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/books/')}}">
                        {{ csrf_field() }}
                        

                        <div class="form-group">
                            <label class="col-md-4 control-label">Tytuł</label>

                            <div class="col-md-6">
                                <input id="tytul" type="text" class="form-control" name="tytul" required>
                            </div>
                        </div>

                       <div class="form-group">
                            <label class="col-md-4 control-label">Autor</label>

                            <div class="col-md-6">
                                <input id="autor" type="text" class="form-control" name="autor">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Wydawnictwo</label>

                            <div class="col-md-6">
                                <input id="wydawnictwo" type="text" class="form-control" name="wydawnictwo">
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-md-4 control-label">Rok</label>

                            <div class="col-md-6">
                                <input id="rok" type="text" class="form-control" name="rok">
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
