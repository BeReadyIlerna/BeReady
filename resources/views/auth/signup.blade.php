@extends('templates.general')
@section('body')




@if (session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
@endif

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif


<h1 class="text-center">Registro Usuario</h1>

<div class="container">
    <form action="{{ route('user.create') }}" method="POST">
        @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
         <div class="row">   
            <div class="form-floating mb-3 mt-3 col-6">
                <input class="form-control" id="name" type="text" name="name" placeholder="Nombre"
                    data-sb-validations="required" value="{{ old('name') }}" />
                <label for="nombre">Nombre<span class="text-danger">*</span></label>
                
            </div>

            <div class="form-floating mb-3 mt-3 col-6">
                <input class="form-control" id="surname" type="text" name="surname" placeholder="Apellidos"
                    data-sb-validations="required" value="{{ old('surname') }}" />
                <label for="apellidos">Apellidos<span class="text-danger">*</span></label>
                
            </div>
        
         </div>

         <div class="row">
        
            <div class="form-floating mb-3 mt-3 col-8">
                <input class="form-control" id="email" type="email" name="email" placeholder="Email"
                    data-sb-validations="required" value="{{ old('email') }}" />
                <label for="email">Email<span class="text-danger">*</span></label>
            
            </div>

            <div class="form-floating mb-3 mt-3 col-4">
                <input class="form-control" id="phone" type="tel" name="phone" placeholder="Telefono"
                    data-sb-validations="required" value="{{ old('phone') }}"/>
                <label for="telefono">Telefono<span class="text-danger">*</span></label>
                
            </div>

         </div>

         <div class="row">
            <div class="form-floating mb-3 mt-3 col-6">
                <input class="form-control" id="password" type="password" name="password" placeholder="Contraseña"
                    data-sb-validations="required" value="{{ old('password') }}" />
                <label for="contraseña">Contraseña<span class="text-danger">*</span></label>
                
            </div>

            <div class="form-floating mb-3 mt-3 col-6">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Tipo de via
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Calle</a></li>
                    <li><a class="dropdown-item" href="#">Avenida</a></li>
                    <li><a class="dropdown-item" href="#">Plaza</a></li>
                    </ul>
                </div>  
            </div>

        </div>

            <div class="form-floating mb-3 mt-3 col-6">
                <input class="form-control" id="way_name" type="text" name="way_name" placeholder="Tipo de via"
                    data-sb-validations="required" value="{{ old('way_name') }}" />
                <label for="tipovia">Nombre de via<span class="text-danger">*</span></label>
                
            </div>

            <div class="form-floating mb-3 mt-3">
                <input class="form-control" id="town" type="text" name="town" placeholder="Calle"
                    data-sb-validations="required" value="{{ old('town') }}" />
                <label for="calle">Calle<span class="text-danger">*</span></label>
                
            </div>

            <div class="form-floating mb-3 mt-3">
                <input class="form-control" id="province" type="text" name="province" placeholder="Provincia"
                    data-sb-validations="required"  value="{{ old('province') }}"/>
                <label for="provincia">Provincia<span class="text-danger">*</span></label>
                
            </div>

            <div class="form-floating mb-3 mt-3">
                <input class="form-control" id="zipcode" type="text" name="zipcode" placeholder="Codigo Postal"
                    data-sb-validations="required"  value="{{ old('zipcode') }}"/>
                <label for="postal">Codigo Postal<span class="text-danger">*</span></label>
                
            </div>


            <div class="form-floating mb-3 mt-3">
                <input class="form-control" id="observation" type="text" name="observation" placeholder="observación"
                    data-sb-validations="required" value="{{ old('observation') }}" />
                <label for="observation">Observation<span class="text-danger">*</span></label>
                
            </div>

            <div class="container-fluid text-center m-2">
                <input type="submit" value="Enviar" class="btn btn-primary">
            </div>

            


    </form>
</div>
@endsection