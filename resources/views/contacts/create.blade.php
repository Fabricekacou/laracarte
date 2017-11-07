@extends('layout.default', ['title' => 'contact'])

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                <h2>Get In Touch</h2>
                <p class="text-muted">
                    If you having trouble with this service, please <a href="mailto:fabricekacu@gmail.com">ask for help</a> .
                </p>

                <form action="" method="post">

                    <div class="form-group">
                        <label for="name" class="control-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required="required">
                    </div>

                    <div class="form-group">
                        <label for="email" class="control-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required="required">
                    </div>

                    <div class="form-group">
                        <label for="message" class="control-label sr-only">message</label>
                        <textarea class="form-control" name="massage" id="message"  rows="8"></textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-dark btn-block"> Submit Enquiry &raquo</button>

                    </div>
                </form>
            </div>

        </div>
    </div>

@stop