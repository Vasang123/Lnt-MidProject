@extends('layout/app')

@section('isi')
<div class="container">
    <div class="container text-white mt-4 rounded p-5 banner">
    <h1 class="mt-3">How To Find Us</h1>
    <p>If you have any questions, just fill in the contact form, and we will answer you shortly.</p>
    </div>
    <div class="col-md-5 py-3 mt-4">
        <h1>Contact Form</h1>
        <form>
            <div class="row">
                <div class="form-group col-md-12 m-1">
                    <label for="">Email</label>
                    <input type="email" class="form-control" placeholder="example@gmail.com">
                </div>
                <div class="form-group col-md-12 m-1">
                    <label for="">Full Name</label>
                    <input type="text" class="form-control" placeholder="Your name goes here">
                </div>
                <div class="form-group col-md-12 m-1">
                    <label for="">Message</label>
                    <textarea class="form-control" placeholder="Enter Message" rows="5"></textarea>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-warning btn-sm p-2 rounded-pill"> Send Mesasge <i class="uil uil-telegram-alt"></i></button>
        </form>
    </div>
</div>
@endsection