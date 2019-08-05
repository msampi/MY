@extends('layouts.app')

@section('content')
<section class="content">
      <div class="error-page">
        <h2 class="headline text-orange"> 405</h2>
        <div class="error-content" style="padding-top: 20px;">
          <h3><i class="fa fa-warning text-orange"></i> Invalid Token.</h3>
          <p>
            Sorry, the token for your action is not valid.
              
           
          </p>
        </div>
      </div>
      </section>
@endsection