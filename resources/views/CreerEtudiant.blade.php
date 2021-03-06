<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Créer etudiant</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/mdb.min.css" rel="stylesheet">
  <link href="/css/style.css" rel="stylesheet">
  <link type="text/css" href="/css/argon.css" rel="stylesheet">
  <script src="/js/app.js"></script>
  <!-- Scripts -->
 

    
        </head>
<body style ="background-color:#FDF9F1;">
<!-- Sidenav -->
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md  " id="sidenav-main" >
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0">
        <img src="./assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
      </a>
      <!-- Divider -->
        <hr class="my-3">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="./assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Navigation -->
        <ul class="navbar-nav"  >
          <li class="nav-item " >
            <a class="nav-link" href="{{URL::to('/admin/home')}}" id="lis">
              <i class="fas fa-home"></i>Acceuil
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/showprof')}}" id="lis">
              <i class="fas fa-user-circle" ></i> Mon Profil
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/showprojetprof')}}" id="lis">
              <i class="fas fa-project-diagram"></i> Mes Projets
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/creerproj')}}" id="lis">
              <i class="fas fa-plus-square"></i>Ajouter un étudiant
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/deconnexion')}}"id="lis">
              <i class="fas fa-sign-out-alt  " ></i> Déconnecter
            </a>
          </li>
          
        </ul>
        <!-- Divider -->
        <hr class=" my-3" style="background-color: #f4f5f7;">   
      </div>
    </div>
  </nav>
  <div class="main-content">
 <nav class="navbar navbar-top navbar-expand-md " id="navbar-main">
      <div class="container-fluid">

<span class="avatar avatar-sm rounded-circle">
                <img  src="/photos de prfl enseignant/{{Session::get('image')}}"  
                  style="overflow:hidden;
                  -webkit-border-radius:80px;
                   -moz-border-radius:80px;
                   border-radius:80px;
                   width:50;
                   height:50px;"> 
                </span>
</a>
        <ul class="navbar-nav align-items-center d-none d-md-flex">
        <li class="  dropdown mr--2">
             <a   id="notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
             <i  class="fas fa-bell fa-2x" style="color:#111721;"></i> 
                  <span class=" badge badge-danger ml-2" id="badge-notify"> </span> 
              </a>
             <ul class="dropdown-menu  dropdown-menu-arrow  " aria-labelledby="notificationsMenu" id="notificationsMenu" >
                    <li class="dropdown-header"  > <a href ="#"><span>No notifications</span> </a></li>
                 </ul>
          </li>
          <li class="">
          <a  >
             <i class="fas fa-question-circle fa-2x" style="color:#111721;"></i> 
              </a>
           
    </nav>
    <div class="header pb-4 pt-5 pt-md-8 " >
    
    </div>
    <div class="container-fluid mt--4 ">
    <div class="row ">
    <div class="col-1 "></div>
    <div class="col-10 ">
          <div class="card  shadow justify-center mb-3" style="background-color:#fffffc;">
            <div class="card-header  border-0"  style="background-color:#111721;">
              <div class="row align-items-center" >
                <div class="col-10">
                <label class="  mb-4 display-4 text-white" >Créer un compte d'étudiant</label>
                </div>
                
              </div>
            </div>
            <div class="card-body">
                    <form method="POST" action="{{URL::to('/SauvEtud')}}">
                    {{csrf_field()}}

                        <div class="form-group row">
                        <div class="col-lg-2">
                            <label for="name" class="form-label text-nowrap text-dark">{{ __('Nom') }}</label> </div>

                            <div class="col-lg-10">
                                <input   style="border-radius:30px;border-color:dark;"id="name" type="text" class="form-control" name="name">
                            </div>
                        </div>

                        
                        <div class="form-group row">
                        <div class="col-lg-2">
                            <label for="name" class="form-label text-nowrap text-dark">{{ __('Prenom') }}</label>   </div>

                            <div class="col-lg-10">
                                <input style="border-radius:30px;border-color:dark;" id="name" type="text" class="form-control" name="surname">
                            </div>
                        </div>
                        <div class="row form-group">
                    <div class="col-lg-2">
                        <label class="text-nowrap"style="color:#000000;" for="input-first-name">Date de naissannce</label></div>
                        <div class="col-lg-10">
                        <input name="date" type="Date" id="input-first-name" class="form-control "  style="border-radius:30px;border-color:dark;" required="required"value="{{ old('date')}}">
                        @if ($errors->has('date'))
                          <p>{{$errors->first('date')}}</p>
                        @endif
                    </div>
                  </div>
                  <div class="form-group row">
                        <div class="col-lg-2">
                            <label for="email" class="form-label text-nowrap text-dark">{{ __('Lieu de naissannce') }}</label></div>
                            <div class="col-lg-10">
                                <input id="email"style="border-radius:30px;border-color:dark;" type="text" class="form-control" name="lieu"  required>
                            
                        </div>
                        </div>
                        <div class="form-group row">




































                        
                        <div class="col-lg-2">
                            <label for="email" class="form-label text-nowrap text-dark">{{ __('Niveau') }}</label></div>
                            <div class="col-lg-10">
                                <input id="email"style="border-radius:30px;border-color:dark;" type="text" class="form-control" name="spec"  required>
                            
                        </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-lg-2">
                            <label for="email" class="form-label text-nowrap text-dark">{{ __('groupe') }}</label></div>
                            <div class="col-lg-10">
                                <input id="email"style="border-radius:30px;border-color:dark;" type="text" class="form-control" name="groupe"  required>
                            
                        </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-lg-2">
                            <label for="email" class="form-label text-nowrap text-dark">{{ __(' Addresse E-Mail') }}</label> </div>
                            <div class="col-lg-10">
                                <input style="border-radius:30px;border-color:dark;" id="email" type="email" class="form-control" name="email"  required></div>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        <div class="form-group row">
                        <div class="col-lg-2">
                            <label for="password" class="form-label text-nowrap text-dark">{{ __('Mot De Passe') }}</label></div>

                            <div class="col-lg-10">
                                <input id="password" style="border-radius:30px;border-color:dark;" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-lg-2">
                            <label for="password-confirm" class="form-label text-nowrap text-dark">{{ __('Confirmation') }}</label></div>

                            <div class="col-lg-10">
                                <input id="password-confirm" style="border-radius:30px;border-color:dark;" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="row mt-3 mb-3">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-outline-dark " >
                                    {{ __('Ajouter') }}
                                </button>
                            </div>
                            
                
                
            </div>
            <div class="row ">
            

                        </div>
                    </form>
                    </div>
                    </div>
                    </div>
                    </div>

              <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.js"></script>
   <script type="text/javascript" src="js/.js"></script>
</body>

</html>
