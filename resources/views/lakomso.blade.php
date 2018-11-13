@extends('layouts.lakomso_layout')

@section('content')

@include('partials.lakomso_menu')

<main role="main" class="container-fluid" >
    
    <!-- intro -->
    <section id="intro" class="sections">            
                
        <div class="intro-text container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-8" >
                    <img class="img-fluid" src="{{ asset('images/logo_big.png') }}">
                    <p><h1 class="display-4">Aizsargpalagi Jūsu labsajūtai</h1></p>
                    <p class="lead">Lakomso piedāvā kvalitatīvu preci, kas sniegs labsajūtu un komfortu Jūsu ikdienā. Mūsu aizsargpalagi aizsargās Jūsu matraci no netīrumiem un palīdzēs cīņā ar alerģijām!</p>
                    <a href="#offer" class="intro-down"><img src="{{ asset('images/Down-Arrow-PNG-File.png') }}"></a>
                </div>
            </div>
        </div>
            
    </section>

        <!-- Piedavajums -->
        <section id="offer" class="sections container-fluid">   

            <h2 class="offer-name-text display-4 text-center">Mūsu piedavājums</h1>
            <div class="card-columns slideanim">
                      
                    <div class="card text-center">
                            <div class="img-container">
                                <a  href="#" data-toggle="modal" data-target="#preces-apraksts-1">
                                    <img class="card-img-top" src="{{ asset('images/prece_2.jpg') }}" alt="aizsargpalags">                                
                                    <div class="img-middle">
                                        <span class="img-text">Uzzināt vairāk</span>
                                    </div>
                                </a>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title" data-toggle="modal" data-target="#preces-apraksts-1">Nosedzošs aizsargpalags</h5>
                                <p class="card-text">Aptver Jūsu matraci no visām pusēm, pasargā to no šķidrumiem un netīrumiem, kā arī aizsargā no putekļu ērcītēm.</p>
                            </div>
                    </div>

                    <div class="card text-center">

                            <div class="img-container">
                                <a  href="#" data-toggle="modal" data-target="#preces-apraksts-2">
                                    <img class="card-img-top" src="{{ asset('images/prece_1.jpg') }}" alt="aizsargpalags">                                
                                    <div class="img-middle">
                                        <span class="img-text">Uzzināt vairāk</span>
                                    </div>
                                </a>
                            </div>


                            <div class="card-body">
                                <h5 class="card-title" data-toggle="modal" data-target="#preces-apraksts-2">Aizsargpalags ar gumijām</h5>
                                <p class="card-text">Radīts no aizsargmateriāla ar četrām gumijām palaga stūros, lai pasargātu Jūsu palagu no aizslīdēšanas.</p>
                            </div>
                    </div>

                    <div class="card text-center">

                            <div class="img-container">
                                <a  href="#" data-toggle="modal" data-target="#preces-apraksts-3">
                                    <img class="card-img-top" src="{{ asset('images/prece_3.jpg') }}" alt="aizsargpalags">                                
                                    <div class="img-middle">
                                        <span class="img-text">Uzzināt vairāk</span>
                                    </div>
                                </a>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title" data-toggle="modal" data-target="#preces-apraksts-3">Spilvendrānas no aizsargauduma</h5>
                                <p class="card-text">Aizsargās Jūsu spilvenu no netīrumiem un putekļiem, aiztaisāms ar rāvējslēdzēja palīdzību.</p>
                            </div>
                    </div>

                    <div class="card text-center">

                            <div class="img-container">
                                <a  href="#" data-toggle="modal" data-target="#preces-apraksts-4">
                                    <img class="card-img-top" src="{{ asset('images/prece_5.jpg') }}" alt="aizsargpalags">                                
                                    <div class="img-middle">
                                        <span class="img-text">Uzzināt vairāk</span>
                                    </div>
                                </a>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title" data-toggle="modal" data-target="#preces-apraksts-4">Gultas veļa pēc pasūtījuma</h5>
                                <p class="card-text">Izgatavojam matraču aizsargus un gultas veļu no aizsargauduma pēc Jūsu pasūtījuma un vēlmēm.</p>
                            </div>
                    </div>
                    

            </div>
        </section>

        <!-- Par audumu -->
        <section id="about" class="sections">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-text slideanim text-center">
                            <div class="display-4 text-center">Par aizsargaudumu</div>
                                <p style="text-align:justify;">Mūsu aizsargpalagi tiek ražoti no augstas kvalitātes antialerģiska auduma. Tas ir mitruma necaurlaidīgs audums, kurš sastāv no diviem slāņiem - kokvilnas virskārta un poliuretāna membrānas pārklājums. Šis īpašais pārklājums neļauj caursūkties šķidrumam, taču saglabā auduma gaisa caurlaidību. Šis ir lielisks veids kā ne tikai pasargāt savu matraci no netīrumu un šķidrumu iesūkšanās, bet arī pasargā Jūs no matračos mītošajām putekļu ērcītēm!<br>
                                <h4 style="color:darkred;">RAŽOTS LATVIJĀ!</h4></p>

                               
                                    <h4 class="text-center">Mūsu produktus iesaka <br>Latvijas Astmas un Alerģijas biedrība</h4>
                                    <a href="http://www.astmaalergija.lv/?id_p=p2&id=348&fbclid=IwAR2_ZE8DFpkIiHMRyue1pok9x8WbMdwYUcyzg51m0yVb5T8LF0D0pW_naHI"target="_blank"><img style="max-width:180px;" src="{{ asset('images/astmaalergija_logo.jpg') }}"></a>
                                
                                


                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="delivery" class="sections">
            <div class="container">
                <div class="row">

                        <div class="col-lg-5 order-lg-2">
                                <div class="display-4 text-center">Piegāde</div>
                                <p style="text-align:justify;"><br>Pasūtījumus piegādājam ar Omnivas pakomātu vai Latvijas Pasta starpniecību. Pie pasūtījumu veikšanas, izvēlaties Jums ērtāko piegādes veidu.</p>
                                <p><br>Pasūtījumu piegādes izmaksas:
                                <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">Pasūtījuma summa</th>
                                            <th scope="col">Latvijas pasts</th>
                                            <th scope="col">Omniva pakomāti</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>līdz €50.00</td>
                                            <td>€2.80</td>
                                            <td>€2.80</td>                                
                                        </tr>
                                        <tr>
                                            <td>vairāk par €50.00</td>
                                            <td>BEZMAKSAS</td>
                                            <td>BEZMAKSAS</td>                                
                                        </tr>                       
                                    
                                    </tbody>
                                </table>
                            </p>
                            <p style="text-align:justify;">Pasūtījumus piegādājam ērtā un glītā iepakojumā, kas ražots no otreizēji pārstrādāta materiāla. Aizsargpalags būs iepakots tā, lai tā būtu lieliska dāvana Jūsu mīļajiem!</p>
                        </div>

                    <div class="col-lg-7 order-lg-1 slideanim"> <img class="featurette-image img-fluid mx-auto" src="{{ asset('images/piegade_kaste.jpg') }}">
                    </div>
                    

                </div>
            </div>


        </section>
        <section id="reviews" class="sections">
        <div class="container">
            <div class="display-4 text-center">Atsauksmes</div>





                @include('partials.carousel')
                </div>


        </section>
 
        </main>
        @include('partials.lakomso_modals')  
      
@endsection