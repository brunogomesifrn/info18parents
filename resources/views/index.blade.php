@extends('layout.base')

@section('conteudo')


<div class="slides">
	<div id="carouselExampleIndicators" class="carousel slide data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>


	  <div class="">
	  	<div class="carousel-inner" role="listbox">
		    <div class="carousel-item active">
		      <img class="d-block img-fluid embacao" src="{{asset('img/1.JPG')}}" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block img-fluid embacao" src="{{asset('img/2.JPG')}}" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block img-fluid embacao" src="{{asset('img/3.JPG')}}" alt="Third slide">
		    </div>
	  	</div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>

</div>



 	<div class="row gray-bg aaa">
                
                <div id="tm-section-2" class="tm-section">
                    <div class="tm-container tm-container-wide">
                        <div class="tm-news-item">
                            
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-news-item-img-container">
                                <img src="{{asset('img/ad.JPG')}}" width="600" height="300" alt="Image" class="img-fluid tm-news-item-img">  
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-news-container">
                                <h2 class="tm-news-title dark-gray-text">Peça Conselhos!</h2>
                                <p class="tm-news-text">Você pode ter um conselheiro portável para ajudar você no seu dia-a-dia, ajudando tomar diversas decisões.</p>
                                <!--<a href="#" class="btn tm-light-blue-bordered-btn tm-news-link">Preview</a>-->
                            </div>
                        </div>

                        <div class="tm-news-item">

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 flex-order-2 tm-news-item-img-container">
                                <img src="{{asset('img/b1.JPG')}}" width="600" height="300" alt="Image" class="img-fluid tm-news-item-img">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-news-container flex-order-1">
                                <h2 class="tm-news-title dark-gray-text">Arrume um responsável para você</h2>
                                <p class="tm-news-text">Vá para festas com responsabilidade do seu pai virtual!</p>
                                
                            </div>
                        </div>

                        <div class="tm-news-item">

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-news-item-img-container">
                                <img src="{{asset('img/eules.JPG')}}" width="600" height="300" alt="Image" class="img-fluid tm-news-item-img">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-news-container">
                                <h2 class="tm-news-title dark-gray-text">Um pai ideal para suas reuniões</h2>
                                <p class="tm-news-text"><a rel="nofollow" href="http://unsplash.com" target="_parent"></a> Vai até para reuniões que nem existem.</p>
                                
                            </div>
                        </div>
                    </div>                    
               </div>

           </div>
            <!-- row -->

@endsection