<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Login - Hotel Merdeka</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="{{ asset('pluto-1.0.0') }}/images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('pluto-1.0.0') }}/css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="{{ asset('pluto-1.0.0') }}/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="{{ asset('pluto-1.0.0') }}/css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="{{ asset('pluto-1.0.0') }}/css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{ asset('pluto-1.0.0') }}/css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{ asset('pluto-1.0.0') }}/css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="{{ asset('pluto-1.0.0') }}/css/custom.css" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="{{ asset('pluto-1.0.0') }}/js/semantic.min.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="inner_page login">
      <div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                        <img width="210" src="{{ asset('pluto-1.0.0') }}/images/logo/logo.png" alt="#" />
                     </div>
                  </div>
                  <div class="login_form">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <fieldset>
                            <div class="field">
                                <label class="label_field">Nama</label>
                                <input type="name" name="name" placeholder="Masukkan Nama" required autofocus autocomplete="name" />
                                {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: red"/> --}}
                             </div>
                           <div class="field">
                              <label class="label_field">Email</label>
                              <input type="email" name="email" placeholder="Masukkan Email" required autofocus autocomplete="username" />
                              {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: red"/> --}}
                           </div>
                           <div class="field">
                              <label class="label_field">Password</label>
                              <input id="password" type="password" name="password" placeholder="Masukkan Password" required autocomplete="current-password" />
                              {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: red" /> --}}
                           </div>
                           <div class="field">
                            <label class="label_field">Konfirmasi</label>
                            <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Konfirmasi Password" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" style="color: red" />
                         </div>
                           <div class="field">
                              <label class="label_field hidden">hidden label</label>
                              {{-- <label class="form-check-label"><input type="checkbox" class="form-check-input"> Ingat Saya</label> --}}

                              <a class="forgot" style="color: orange" href="{{ route('login') }}">Sudah Punya Akun</a>
                           </div>
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <button class="main_bt">Daftar</button>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="{{ asset('pluto-1.0.0') }}/js/jquery.min.js"></script>
      <script src="{{ asset('pluto-1.0.0') }}/js/popper.min.js"></script>
      <script src="{{ asset('pluto-1.0.0') }}/js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="{{ asset('pluto-1.0.0') }}/js/animate.js"></script>
      <!-- select country -->
      <script src="{{ asset('pluto-1.0.0') }}/js/bootstrap-select.js"></script>
      <!-- nice scrollbar -->
      <script src="{{ asset('pluto-1.0.0') }}/js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="{{ asset('pluto-1.0.0') }}/js/custom.js"></script>
   </body>
</html>
