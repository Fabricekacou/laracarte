@extends('layout.default', ['title' => 'contact'])

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                <h2>Get In Touch</h2>
                <p class="text-muted">
                    If you having trouble with this service, please <a href="mailto:fabricekacu@gmail.com">ask for help</a> .
                </p>

                <form action="{{ route('contact_path') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group has-error">
                        <label for="name" class="control-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required="required" value="{{ old('name') }}">
                        {!! $errors->first('name','<span>:message</span>')  !!}
                    </div>

                    <div class="form-group">
                        <label for="email" class="control-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required="required" value="{{ old('email') }}">
                        {!! $errors->first('email','<span>:message</span>')  !!}
                    </div>

                    <div class="form-group">
                        <label for="message" class="control-label sr-only">message</label>
                        <textarea class="form-control" name="message" id="message"  rows="8">{{ old('message') }}</textarea>
                        {!! $errors->first('message','<span>:message</span>')  !!}
                    </div>

                    <div class="form-group">
                        <button class="btn btn-dark btn-block" type="submit"> Submit Enquiry &raquo</button>

                    </div>
                </form>
            </div>

        </div>
    </div>

@stop
