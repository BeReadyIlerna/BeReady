@extends('templates.general')
@section('body')

<div class="container px-5 my-5">
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
</div>





<h1 class="text-center">Registro Usuario</h1>

<div class="container-fluid d-flex flex-column justify-content-center">
    <form action="" >
        <div class="container-fluid text-center m-2">
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name">
        </div>
        <div class="container-fluid text-center m-2">
            <label for="surname">Apellidos</label>
            <input type="text" id="surname" name="surname">
        </div>

        <div class="container-fluid text-center m-2">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>

        <div class="container-fluid text-center m-2">
            <label for="phone">Telefono</label>
            <input type="text" name="phone" id="phone">
        </div>

        <div class="container-fluid text-center m-2">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password">
        </div>

        <div class="container-fluid text-center m-2">
            <label for="way_name">Tipo de calle</label>
            <input type="text" id="way_name" name="way_name">
        </div>

        <div class="container-fluid text-center m-2">
            <label for="town">Calle</label>
            <input type="text" id="town" class="town">
        </div>

        <div class="container-fluid text-center m-2">
            <label for="zipcode">Codigo Postal</label>
            <input type="text" id="zipcode" class="zipcode">
        </div>


        <div class="container-fluid text-center m-2">
            <label for="observation">Observación</label>
            <input type="text" id="observation" class="observation">
        </div>

        <div class="container-fluid text-center m-2">
            <input type="button" value="Enviar" class="btn btn-primary">
        </div>


    </form>
</div>
@endsection