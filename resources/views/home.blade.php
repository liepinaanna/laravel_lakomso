@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create blog post</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="addnew">

                        @csrf

                        <div class="modal-body">
                            <textarea name="note" class="form-control" id="noteTextArea" rows="1" placeholder="title"></textarea>
                            <textarea name="body-text" class="form-control" id="noteTextArea" rows="10" placeholder="text"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-secondary">Add blog post</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

   
        
      



@endsection
