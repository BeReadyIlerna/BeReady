@extends('templates.template')

<h1>Hello-Bootstrap</h1>

<div class="container-fluid ">
    <form action="" class="col-6 ">
        <label for="name">Nombre</label>
        <input type="text" id="name" name="name">

        <label for="surname">Apellidos</label>
        <input type="text" id="surname" name="surname">

        <label for="email">Email</label>
        <input type="email" name="email" id="email">

        <label for="phone">Telefono</label>
        <input type="text" name="phone" id="phone">

        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password">

        <label for="way_name">Tipo de calle</label>
        <input type="text" id="way_name" name="way_name">

        <label for="town">Calle</label>
        <input type="text" id="town" class="town">

        <label for="zipcode">Codigo Postal</label>
        <input type="text" id="zipcode" class="zipcode">

        <label for="observation">Observación</label>
        <input type="text" id="observation" class="observation">

    </form>
</div>
