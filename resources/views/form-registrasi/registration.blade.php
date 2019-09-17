<!-- Menghubungkan dengan view template master -->
@extends('form-registrasi.master_reg')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Registration Form')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
<style>
    .login-container {
        margin-top: 5%;
        margin-bottom: 5%;
    }

    .login-form-1 {
        padding: 5%;
        box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
    }

    .login-form-1 h3 {
        text-align: center;
        color: #333;
    }

    .login-form-2 {
        padding: 5%;
        background: #0062cc;
        box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
    }

    .login-form-2 h3 {
        text-align: center;
        color: #fff;
    }

    .login-container form {
        padding: 10%;
    }

    .btnSubmit {
        width: 50%;
        border-radius: 1rem;
        padding: 1.5%;
        border: none;
        cursor: pointer;
    }

    .login-form-1 .btnSubmit {
        font-weight: 600;
        color: #fff;
        background-color: #0062cc;
    }

    .login-form-2 .btnSubmit {
        font-weight: 600;
        color: #0062cc;
        background-color: #fff;
    }

    .login-form-2 .ForgetPwd {
        color: #fff;
        font-weight: 600;
        text-decoration: none;
    }

    .login-form-1 .ForgetPwd {
        color: #0062cc;
        font-weight: 600;
        text-decoration: none;
    }
</style>


<div class="container login-container">
    <div class="row">
        <div class="col-md-6 login-form-1">
            <h3>Register As Member</h3>
            <div>
                <a href="/reg/form/member" class="btnSubmit" title="Register As Member" style="display: block; margin: 0 auto; text-align: center;">Register As Member</a>
            </div>
        </div>
        <div class="col-md-6 login-form-2">
            <h3>Register As Merchant</h3>
            <div>
                <a href="/reg/form/merchant" class="btnSubmit" title="Register As Merchant" style="display: block; margin: 0 auto; text-align: center;">Register As Merchant</a>
            </div>
        </div>
    </div>
</div>

@endsection