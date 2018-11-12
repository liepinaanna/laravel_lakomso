@extends('layouts.lakomso_layout')

@section('content')


@include('partials.lakomso_menu_blog')
<main role="main" class="container-fluid" >       
<section id="contacts" class="sections">
    <div class="container">

        
     
        <div class="row">
            <div class="card">
                <div class="card-body">
                          
                    <a class="blockquote mb-0" href="/blogs/{{$todo->id}}">
                        <p>{{ $todo->title }}</p>
                    </a>
                    <p class="card-text">
                        <small class="text-muted">{{ $todo->created_at->toFormattedDateString() }}</small>
                    </p>
                    
                    <blockquote class="blockquote mb-0">
                       <p>{{ $todo->body }}</p>
                    </blockquote>
                    
                    
                    
                </div><!--card-body end-->
            </div><!--card end-->
        </div><!--row end-->
           
       
       
    </div><!--container end-->
       
</section>
      

<!--row end<section id="random" class="section"></section>-->
</main>
        
      
@endsection