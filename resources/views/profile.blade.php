@extends('layouts/studentLayout')

@section('perfil')
<div class="card">
    <div class="card-header">Perfil</div>
    <div class="card-body">
        <form name="my-form" action="" method="POST">

            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right"></label>
                <div class="col-md-6">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">ID</label>
                <div class="col-md-6">
                    <input type="text" id="id" name="id" value="" readonly="true">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">User
                    Name</label>
                <div class="col-md-6">
                    <input type="text" id="username" name="username" value="" class="form-control" placeholder="" required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">E-Mail
                    Address</label>
                <div class="col-md-6">
                    <input type="text" id="email" name="email" value="" class="form-control" placeholder="" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">Contraseña*</label>
                <div class="col-md-6">
                    <input type="password" id="password" name="password_1" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">Repite la contraseña*</label>
                <div class="col-md-6">
                    <input type="password" id="password2" name="password_2" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary" name="update_btn">
                    Actualizar
                </button>
            </div>
    </div>
    </form>
</div>
@endsection