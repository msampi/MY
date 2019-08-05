@extends('emails.layout')

@section('content')
    <tr>
        <td>
            <!-- Greeting -->
            <h1>
                Welcome {{$name}} {{$last_name}}
            </h1>
        </td>
    </tr>
    <tr>
        
        <td>
            We are glad to welcome you to our platform.<br>
            We hope you enjoy our services.
        </td>
    </tr>  
    <tr>
        <td>
            &nbsp;
        </td>
    </tr>  
    <tr>
        <td>
            @if(isset($link))
                To confirm your account please follow this link <a href="{{$link}}">{{$link}}</a>
            @elseif (isset($password))
                Your provitional password is demo123. You can follow this link <a href="http://www.magyates.com/password/reset">http://www.magyates.com/password/reset</a> to establish your new password.
            @endif
        </td>
    </tr>  
    <tr>
        <td>
            &nbsp;
        </td>
    </tr>  
@endsection                                

