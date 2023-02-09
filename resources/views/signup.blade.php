@extends('templates.general')
@section('body')

{{-- <div class="container px-5 my-5">
    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
        <div class="form-floating mb-3">
            <input class="form-control" id="newField" type="text" placeholder="New Field" data-sb-validations="required" />
            <label for="newField">New Field</label>
            <div class="invalid-feedback" data-sb-feedback="newField:required">New Field is required.</div>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
            <label for="message">Message</label>
            <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
        </div>
        <div class="d-none" id="submitSuccessMessage">
            <div class="text-center mb-3">
                <div class="fw-bolder">Form submission successful!</div>
                <p>To activate this form, sign up at</p>
                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
            </div>
        </div>
        <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">Error sending message!</div>
        </div>
        <div class="d-grid">
            <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button>
        </div>
    </form>
</div> --}}


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

<div class="container-fluid d-flex flex-column justify-content-center align-items-center ">
    <form action="{{ route('user.create') }}" method="POST">
        @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}

        <div class="form-floating mb-3 mt-3">
            <input class="form-control" id="name" type="text" name="name" placeholder="Nombre"
                data-sb-validations="required" />
            <label for="nombre">Nombre</label>
            
        </div>

        <div class="form-floating mb-3 mt-3">
            <input class="form-control" id="surname" type="text" name="surname" placeholder="Apellidos"
                data-sb-validations="required" />
            <label for="apellidos">Apellidos</label>
            
        </div>

        <div class="form-floating mb-3 mt-3">
            <input class="form-control" id="email" type="email" name="email" placeholder="Email"
                data-sb-validations="required" />
            <label for="email">Email</label>
           
        </div>

        <div class="form-floating mb-3 mt-3">
            <input class="form-control" id="phone" type="tel" name="phone" placeholder="Telefono"
                data-sb-validations="required" />
            <label for="telefono">Telefono</label>
            
        </div>

        <div class="form-floating mb-3 mt-3">
            <input class="form-control" id="password" type="password" name="password" placeholder="Contraseña"
                data-sb-validations="required" />
            <label for="contraseña">Contraseña</label>
            
        </div>

        <div class="form-floating mb-3 mt-3">
            <input class="form-control" id="way_type" type="" name="way_type" placeholder="Tipo de via"
                data-sb-validations="required" />
            <label for="tipovia">Tipo de via</label>
            
        </div>

        <div class="form-floating mb-3 mt-3">
            <input class="form-control" id="way_name" type="text" name="way_name" placeholder="Tipo de via"
                data-sb-validations="required" />
            <label for="tipovia">Tipo de via</label>
            
        </div>

        <div class="form-floating mb-3 mt-3">
            <input class="form-control" id="town" type="text" name="town" placeholder="Calle"
                data-sb-validations="required" />
            <label for="calle">Calle</label>
            
        </div>

        <div class="form-floating mb-3 mt-3">
            <input class="form-control" id="province" type="text" name="province" placeholder="Provincia"
                data-sb-validations="required" />
            <label for="provincia">Provincia</label>
            
        </div>

        <div class="form-floating mb-3 mt-3">
            <input class="form-control" id="zipcode" type="text" name="zipcode" placeholder="Codigo Postal"
                data-sb-validations="required" />
            <label for="postal">Codigo Postal</label>
            
        </div>


        <div class="form-floating mb-3 mt-3">
            <input class="form-control" id="observation" type="text" name="observation" placeholder="observación"
                data-sb-validations="required" />
            <label for="observation">Observation</label>
            
        </div>

        <div class="container-fluid text-center m-2">
            <input type="submit" value="Enviar" class="btn btn-primary">
        </div>


    </form>
</div>
@endsection