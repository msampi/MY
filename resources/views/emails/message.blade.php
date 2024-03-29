@extends('emails.layout')

@section('content')
    <tr>
        <td>
            <!-- Greeting -->
            <h1>
                @if (isset($title))
                    {{ $title }}
                @else
                    Contact from website
                @endif
            </h1>

        </td>
    </tr>
    <tr>
        <td>
            &nbsp;
        </td>
    </tr>
    <tr>
        <td>
            <p><strong>Name:</strong>   {!! $name !!}</p>
            <p><strong>Email:</strong>  {!! $email !!}</p>
            <p><strong>Message:</strong>{!! $msg !!}</p>
        </td>
    </tr>
    <tr>
        <td>
            &nbsp;
        </td>
    </tr>
@endsection                                

