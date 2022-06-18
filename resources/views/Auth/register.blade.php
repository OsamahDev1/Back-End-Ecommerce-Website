@extends('layouts.navbar')
@section('content')
        <div class="container signup" style="margin-top:271px">
            <div class="row">
                <div class="col-xs-4"></div>
                <div class="col-xs-4 form">
                    <h1> Sign up </h1>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group">
                                <input class="form-control" placeholder="Name" type="text" name="name" required="true">
            
                                <br>

                                <input class="form-control" placeholder="Email" type="text" name="email">
            
                                <br>

                                <input class="form-control" placeholder="Password" type="password" name="password">
            
                                <br>
            
                                <input class="form-control" placeholder="Contact" type="text" name="phone" required="true">
            
                                <br>

                                <input class="form-control" placeholder="City" type="text" name="city" required="true">

                                <br>
                                <input class="form-control" placeholder="Address" type="text" name="address" required="true">

                                <br>
            
                    <button class="btn btn-primary" type="submit">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer>
                <div class="container">
                    <center>
                     <p>Copyright © Lifestyle Store. All Rights
                    Reserved | Contact Us: +91 90000 00000”. </p>
                    </center>	
                </div>    
        </footer>
    </body>
</html>
@endsection