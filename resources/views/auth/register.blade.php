<!DOCTYPE html>
 <html lang="en">

 <head>

     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">

     <title>GbcSystem Registrar</title>

     <!-- Custom fonts for this template-->
     <link href="{{asset('asset/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
     <link
         href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
         rel="stylesheet">

     <!-- Custom styles for this template-->
     <link href="{{asset('asset/css/sb-admin-2.min.css')}}" rel="stylesheet">

 </head>

 <body class="bg-gradient-light">

     <div class="container">

         <div class="card o-hidden border-0 shadow-lg my-5">
             <div class="card-body p-0">
                 <!-- Nested Row within Card Body -->
                 <div class="row">
                     <img class="col-lg-5 d-none d-lg-block"
                         src="https://static.wixstatic.com/media/123890_36583682432d48f98590de0729bb1e01~mv2.jpg/v1/fill/w_640,h_628,fp_0.50_0.50,q_85,usm_0.66_1.00_0.01,enc_auto/123890_36583682432d48f98590de0729bb1e01~mv2.jpg">
                     <div class="col-lg-7">
                         <div class="p-5">
                             <div class="text-center">
                                 <h1 class="h4 text-gray-900 mb-4">Crear cuenta!</h1>
                             </div>
                             <form class="user" method="POST" action="{{ route('register') }}">
                                 @csrf
                                 <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label for="name" value="{{ __('Name') }}"></label>
                                        <input type="text" class="form-control form-control-user" id="name" name="name"
                                            placeholder="Nombre" :value="old('name')" required autofocus autocomplete="name">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="name" value="{{ __('lastName') }}"></label>
                                        <input type="text" class="form-control form-control-user" id="lastName" name="lastName"
                                            placeholder="Apellido" :value="old('lastName')" required autofocus autocomplete="name">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="name" value="{{ __('document') }}"></label>
                                        <input type="text" class="form-control form-control-user" id="document" name="document"
                                        placeholder="Documento" :value="old('document')" required autofocus autocomplete="name">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="name" value="{{ __('phone') }}"></label>
                                        <input type="text" class="form-control form-control-user" id="phone" name="phone"
                                        placeholder="Celular" :value="old('phone')" required autofocus autocomplete="name">
                                    </div>

                                        <div class="col-sm-6">
                                         <label for="name" value="{{ __('address') }}"></label>
                                         <input type="text" class="form-control form-control-user" id="address" name="address"
                                             placeholder="Dirección" :value="old('address')" required autofocus autocomplete="name">
                                     </div>

                                    <div class="col-lg-6">
                                        <label for="name" value="{{ __('status') }}"></label>
                                        <input type="text" class="form-control form-control-user" id="status" name="status"
                                            placeholder="Estado" :value="old('status')" required autofocus autocomplete="name">
                                    </div>

                                    <div class="col-lg-12">
                                        <label for="email" value="{{ __('Email') }}"></label>
                                        <input type="email" class="form-control form-control-user" id="email" name="email"
                                        placeholder="Correo" :value="old('email')" required autofocus autocomplete="name">
                                    </div>

                                 <div class="col-sm-6">
                                         <label for="password" value="{{ __('Password') }}"></label>
                                         <input type="password" class="form-control form-control-user" id="password"
                                             placeholder="Contraseña" name="password" required autocomplete="new-password">
                                     </div>

                                     <div class="col-sm-6">
                                         <label for="password_confirmation" value="{{ __('Confirm Password') }}"></label>
                                         <input type="password" class="form-control form-control-user"
                                             id="password_confirmation" placeholder="Repetir contraseña"
                                             name="password_confirmation" required autocomplete="new-password">
                                     </div>
                                 </div>
                                 @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                 <div class="mt-4">
                                     <x-jet-label for="terms">
                                         <div class="flex items-center">
                                             <x-jet-checkbox name="terms" id="terms" required/>


                                             <div class="ml-2">
                                             {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                     'terms_of_service' => '<a target="blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'._('Terms of Service').'</a>',
                                                     'privacy_policy' => '<a target="blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'._('Privacy Policy').'</a>',
                                             ]) !!}
                                         </div>
                                         </div>
                                     </x-jet-label>
                                 </div>
                                 @endif




                             {{-- <div class="text-center">
                                 <a class="small" href="forgot-password.html">Forgot Password?</a>
                             </div> --}}
                             <div class="text-center">

                                 <button class="btn btn-primary btn-user btn-block">
                                     {{ __('Registrarse') }}
                                 </button>

                                 <div class="text-center">
                                    <a class="small" href="{{ route('password.request') }}">¿Has olvidado tu contraseña?</a>
                                </div>
                                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                 href="{{ route('login') }}">
                                 {{ __('¿Ya registrado?') }}
                                 </a>
                             </div>
                         </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

     </div>

     <!-- Bootstrap core JavaScript-->
     <script src="{{asset('asset/vendor/jquery/jquery.min.js')}}"></script>
     <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

     <!-- Core plugin JavaScript-->
     <script src="{{asset('asset/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

     <!-- Custom scripts for all pages-->
     <script src="{{asset('asset/js/sb-admin-2.min.js')}}"></script>

 </body>

 </html>
