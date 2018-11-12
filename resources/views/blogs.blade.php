@extends('layouts.lakomso_layout')
@section('content')

@include('partials.lakomso_menu_blog')
<main role="main" class="container-fluid" >
       
    <section id="contacts" class="sections">
        <div class="container">
            <div class="display-4 text-center">Blogs</div>
        
                @foreach ($todos as $single_todo)
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                                        
                            @if(Auth::user())
                            <button type="button" class="close" aria-label="Close">
                            <a href="/blogs/delete/{{$single_todo->id}}"><span aria-hidden="true">&times;</span></a>
                            </button>
                            @else
                            @endif
                                        
                            <a class="blockquote mb-0" href="/blogs/{{$single_todo->id}}">
                                <p>{{ $single_todo->title }}</p>
                            </a>
                            
                            <p class="card-text">
                                <small class="text-muted">{{ $single_todo->created_at->toFormattedDateString() }}</small>
                            </p>
                            
                            <blockquote class="blockquote mb-0" style="overflow: hidden; text-overflow:ellipsis;max-height: 300px;">
                            <p class="bodytext">{{ $single_todo->body }}</p>
                            </blockquote>
                            
                            
                    
                        </div>
                    </div>
                </div>
                
                @endforeach
        
        </div><!--container end-->

    </section><!--section end-->
<!--<section id="random" class="section"></section>-->
</main>
      
@endsection