@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-6">
            <form class="mt-5">
                <div class="form-group">                  
                    <input type="firstname" class="form-control" id="firstname" name="firstname" placeholder="Firstname">                  
                </div>

                <div class="form-group">                  
                    <input type="lastname" class="form-control" id="lastname" name="lastname" placeholder="Lastname">                  
                </div>

                <div class="form-group">                  
                     <input type="email" class="form-control" id="email" name="email" placeholder="Email">                  
                </div>
               
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection