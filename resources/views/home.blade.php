@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Jauns bloga ieraksts</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="addnew">

                        @csrf

                        <div class="modal-body">
                            <textarea name="note" class="form-control" id="noteTextArea" rows="1" placeholder="Nosaukums"></textarea><br>
                            <textarea name="body-text" class="form-control" id="noteTextArea" rows="10" placeholder="Teksts"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-secondary">Pievienot bloga ierakstu</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

   
        
      



@endsection
