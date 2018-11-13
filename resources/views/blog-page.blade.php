@extends('layouts.lakomso_layout')

@section('content')


@include('partials.lakomso_menu_blog')
<main role="main" class="container-fluid" >       
<section id="contacts" class="sections">
    <div class="container" id="blog-container">

        
     
        <div class="row">
            <div class="card" id="blog-cards">
                <div class="card-body">
                          
                    <a href="/blogs/{{$todo->id}}">
                        <h4>{{ $todo->title }}</h4>
                    </a>

                    <p class="card-text">
                        <small class="text-muted">{{ $todo->created_at->toFormattedDateString() }}</small>
                    </p>
                    
                    
                    <p>{{ $todo->body }}</p>
                    
                    
                    
                    
                </div><!--card-body end-->
            </div><!--card end-->
        </div><!--row end-->
           
       
       
    </div><!--container end-->
       
</section>
      

<!--row end<section id="random" class="section"></section>-->
</main>
        
      
@endsection