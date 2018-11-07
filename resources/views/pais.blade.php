@extends('layout.base')

@section('pais')

<div class="divao" >
			<h2 align="center">Equipe de pais</h2>
			


		</div>

		<div class="row gray-bg aaa">
                
                <div id="tm-section-2" class="tm-section">
                    <div class="tm-container tm-container-wide">
                        <div class="tm-news-item">
                            
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-news-item-img-container">
                                <img src="{{asset('img/pai0.JPG')}}" width="600" height="300" alt="Image" class="img-fluid tm-news-item-img">  
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-news-container">
                                <h2 class="tm-news-title dark-gray-text">Chevrolet da Silva Ford</h2>
                                <p class="tm-news-text">Um pai muito legal, e que tem bastante experiência com pessoas mais velhas.</p>
                                <!--<a href="#" class="btn tm-light-blue-bordered-btn tm-news-link">Preview</a>-->
                            </div>
                        </div>

                        <div class="tm-news-item">

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 flex-order-2 tm-news-item-img-container">
                                <img src="{{asset('img/lira.PNG')}}" width="700" height="200" alt="Image" class="img-fluid tm-news-item-img">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-news-container flex-order-1">
                                <h2 class="tm-news-title dark-gray-text">The Rock(Lira)</h2>
                                <p class="tm-news-text">Um pai individual para uma pessoa só que atende do domingo pro sábado.</p>
                              
                            </div>
                        </div>

                        <div class="tm-news-item">

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-news-item-img-container">
                                <img src="{{asset('img/mae1.jpg')}}" width="600" height="300" alt="Image" class="img-fluid tm-news-item-img">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-news-container">
                                <h2 class="tm-news-title dark-gray-text">Virtuosa Doutora dos Anjos</h2>
                                <p class="tm-news-text"><a rel="nofollow" href="http://unsplash.com" target="_parent"></a>Mãe muito amiga, estando presentequase todo momento com você.</p>
                                
                            </div>
                        </div>
                    </div>                    
               </div>

           </div>

@endsection