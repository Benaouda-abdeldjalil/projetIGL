
<!DOCTYPE html>
<html lang="en">



<head>



	<title>Annoce de colis</title>
    <meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('trajet/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('trajet/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	 <link rel="stylesheet" type="text/css" href="{{asset('trajet/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('trajet/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('trajet/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('trajet/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('trajet/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('trajet/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('trajet/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('trajet/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('trajet/css/util1.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('trajet/css/main1.css')}}">
<!--===============================================================================================-->

<link rel="stylesheet" href="{{asset('trajet/static/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('trajet/static/css/fontawesome.min.css')}}">
    <script src="{{asset('trajet/static/js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('trajet/static/css/mystyle.css')}}">
    <link rel="stylesheet" href="{{asset('trajet/static/css/style.css')}}">
</head>
<body>
@php
$niveaux = array('1cp','2cp','1cs','2cs');
$groupes = array('1','2','3','4','5','6','7','8','9');
@endphp
<div class="limiter">
    <div class="container-login100">
        <div class="login100-more" style="background-image: url({{asset('colis/images/login.jpg')}});"></div>

        <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">

{!! Form::open(['action' => 'NoteController@store','method'=>'POST','files'=>true]) !!}
<div class="wrap-input100 validate-input">
    <!-- data-validate="niveau d'etude est obligé"> -->
        <span class="label-input100">Niveau</span>


                                {{ Form::label('niveau', 'Niveau',['class'=>'label-input100'])}}
                                {!! Form::select('niveau', $niveaux,'', ['class'=>'input100 ','placeholder'=>'select un niveau']) !!}
         <span class="focus-input100"></span>



    </div>
    <div class="wrap-input100 validate-input">
        <!-- data-validate="le groupe est obligé"> -->
            <span class="label-input100">Wilaya de départ</span>


                                    {{ Form::label('groupe', 'Groupe',['class'=>'label-input100'])}}
                                    {!! Form::select('groupe', $groupes,'', ['class'=>'input100 ','placeholder'=>'select un groupe']) !!}
             <span class="focus-input100"></span>



        </div>
        <div class="wrap-input100 validate-input">
            <!-- data-validate="photo note est obligé"> -->
                <span class="label-input100">la photo</span>
                {!! Form::file('fichier', ['class'=>'input100']) !!}

                 <span class="focus-input100"></span>



            </div>

            <div class="container-login100-form-btn" style="position: relative;left: 76px; top: 13PX;">
                <!-- <button class="login100-form-btn" style="background-color: #f9ca24; border-radius: 10px;">

              </button>  -->

              {{Form::submit('Ajouter!',['class'=>'login100-form-btn','style'=>'background-color: #f9ca24; border-radius: 10px;'])}}
         </div>
{!! Form::close() !!}
      </form>

  </div>
</div>
</div>
</div>





<!--===============================================================================================-->
<script src="{{asset('trajet/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('trajet/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('trajet/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('trajet/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('trajet/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('trajet/vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('trajet/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('trajet/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('trajet/js/main.js')}}"></script>


</body>


</html>
