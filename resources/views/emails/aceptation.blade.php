@extends('emails.layout')

@section('content')
    <tr>
        <td>
            <!-- Greeting -->
            <h1>
                A new user has registered as investor
            </h1>
        </td>
    </tr>
    <tr>
        <td>
            <strong>Accept or reject this investor:</strong>
        </td>
    </tr>
    <br>
    <tr>
        <td>
            <strong>Name:</strong> {{$name}} <br>
            <strong>Last Name:</strong> {{$last_name}} <br>
            <strong>Email:</strong> {{$email}} <br>
        </td>
    </tr>
    <br>
    <tr>
        <td>
            <a style="display: block; display: inline-block; width: 200px; min-height: 20px; padding: 10px;
                 background-color: #3869D4; border-radius: 3px; color: #ffffff; font-size: 15px; line-height: 25px;
                 text-align: center; text-decoration: none; -webkit-text-size-adjust: none; background-color: #22BC66;" href="{{$activateLink}}">Activate this investor</a>
        </td>
    </tr>
    <br>
    <tr>
        <td>
            <a style="display: block; display: inline-block; width: 200px; min-height: 20px; padding: 10px;
                 background-color: #3869D4; border-radius: 3px; color: #ffffff; font-size: 15px; line-height: 25px;
                 text-align: center; text-decoration: none; -webkit-text-size-adjust: none; background-color: #dc4d2f;" href="{{$rejectLink}}">Reject this investor</a>
        </td>
    </tr>
    <tr>
        <td>
            &nbsp;
        </td>
    </tr>
@endsection

