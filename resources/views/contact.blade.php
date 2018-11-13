@extends('layouts.lakomso_layout')
@section('content')


@include('partials.lakomso_menu_contacts')
<main role="main" class="container-fluid" >
       
    <section id="contacts" class="sections">
        <div class="container" id="blog-container">
                    
                
                <div class="row">
                
                        
                        <div class="col-lg-6">
                       
                        <p><b>Tālrunis:</b> +371 26825505<br><b>E-pasts:</b> lakomso@inbox.lv</p>
                        <p><b>Rekvizīti:</b><br>SIA "Lakomso" <br>Reģ.nr.: 40203078379<br>Bankas konts: SEB Banka, LV74UNLA0055000176374</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34615.41312657341!2d24.81037111762265!3d57.16332987411291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e94e2d43517dc1%3A0x400cfcd68f31f60!2sSigulda%2C+Siguldas+pils%C4%93ta%2C+LV-2150!5e0!3m2!1slv!2slv!4v1542104341880" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                        
                        
                        </div>
                        <div class="col-lg-6">
                                @if (count($errors)>0)
                                <div class="alert alert-danger">
                                        <ul>
                                        @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                        @endforeach
                                        </ul>
                                </div>
                                @endif
                                <form action="/contact" method="POST">
                                        

                                        @csrf
                                        <div class="form-group">
                                                <label for="name">Jūsu Vārds *</label>
                                                <input class="form-control" type="text" id="name" placeholder="Jūsu Vārds" name="name">
                                        </div>
                                        <div class="form-group">
                                                <label for="email">Jūsu e-pasts *</label>
                                                <input class="form-control" type="text" id="email" placeholder="Jūsu e-pasts" name="email">
                                        </div>
                                        <div class="form-group">
                                                <label for="message">Jūsu ziņa *</label>
                                                <textarea class="form-control" name="message" id="message" cols="30" rows="10"> </textarea>
                                        </div>
                                                <button type="submit" class="btn btn-secondary">Sūtīt</button>
                                        </div>
                                </form>
                        </div>
                
                </div><!--row end-->


        </div><!--container end-->

</section><!--section end-->

</main>



@endsection