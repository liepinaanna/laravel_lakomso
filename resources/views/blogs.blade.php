@extends('layouts.lakomso_layout')
@section('content')

@include('partials.lakomso_menu_blog')
<main role="main" class="container-fluid" >
       
    <section id="contacts" class="sections">
        <div class="container" id="blog-container">
            
        
                @foreach ($todos as $single_todo)
                <div class="row">
                    <div class="card" id="blog-cards">
                        <div class="card-body">
                                        
                            @if(Auth::user())
                            <button type="button" class="close" aria-label="Close">
                            <a href="/blogs/delete/{{$single_todo->id}}"><span aria-hidden="true">&times;</span></a>
                            </button>
                            @else
                            @endif
                                        
                            <a href="/blogs/{{$single_todo->id}}">
                                <h4>{{ $single_todo->title }}</h4>
                            </a>
                            
                            <p class="card-text">
                                <small class="text-muted">{{ $single_todo->created_at->toFormattedDateString() }}</small>
                            </p>
                            
                              
                            <p class="bodytext" style="overflow: hidden; text-overflow:ellipsis;max-height: 105px;">{{ $single_todo->body }}</p>
                            
                            
                            
                    
                        </div>
                    </div>
                </div>
                
                @endforeach
        
        </div><!--container end-->

    </section><!--section end-->

</main>
      
@endsection