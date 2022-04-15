@extends('frontend.layouts_frontend.master')

@section('title')
Our Food Menu - La Cuisine De Sarah
@endsection

@section('extra_styles')
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"/> -->

<style>
    .modal {
  background: rgba(0, 0, 0, 0.5); 
}
.modal-backdrop {
  display: none;
  margin-top:80px;
}


</style>

@endsection

@section('content')
<!-- content  -->


<!-- Page Title -->
<section class="page-title" style="background-image: url(assets/frontend_assets/assets/images/background/11.jpg)">
    <div class="auto-container">
        <h1>Food Menu</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="/">Home</a></li>
            <li>Our Foods</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- Dishes Section -->
<section class="dishes-section">
    <div class="auto-container">

        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2>Our Food Menu</h2>
        </div>

        <div class="row clearfix">

            <!-- Dishes Column -->
            @foreach($foodmenus as $foodmenu)
            <div class="dishes-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">

                    <!-- Dish Block -->
                    <div class="dish-block style-three">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{ asset($foodmenu->foodmenu_photo) }}" style="width: 100%; height:100%;">
                            </div>
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h4 style="font-size:15px;"><a href="#">{{ $foodmenu->foodmenu_name }}</a></h4>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                        <div class="price" style="font-size:15px;">{{ $foodmenu->foodmenu_price }} <span style="font-size:10px;">ugx</span></div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="price" style="font-size:15px;">
                                        <a href="" data-toggle="modal" data-target="#viewFoodModal{{$foodmenu->id}}"><span>Details<i class="fas fa-angle-right" style="margin-left:5px;"></i></span></a>

                                    </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
							<div class="clearfix">
                            <div class="pull-left text" style="margin-top:0px">{{ \Illuminate\Support\Str::limit($foodmenu->foodmenu_description, 100, $end='....') }}</div>
							</div>

                        </div>
                    </div>



                </div>
                
            </div>

            
             <!-- The Modal -->
             <div class="modal-dialog">
                  <div class="modal" id="viewFoodModal{{$foodmenu->id}}">
                <div class="modal-dialog" style="margin-top: 10%;">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">View Food Details</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                    <p>FOOD : {{ $foodmenu->foodmenu_name}} </p>
                    <p>PRICE : {{ $foodmenu->foodmenu_price}} </p>
                    <hr>
                    <p>Description : {{ $foodmenu->foodmenu_description}} </p>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                    
                </div>
                </div>
            </div>
            </div>
            <!-- End of modal -->
            @endforeach


            


        </div>

        <!-- Button Box -->
        <!-- <div class="button-box text-center">
					<a href="menu.html" class="theme-btn btn-style-five"><span class="txt">View full menu</span></a>
				</div> -->

    </div>

</section>


            

<!--End Dishes Page Section-->




@endsection

@section('extra_scripts')


@endsection