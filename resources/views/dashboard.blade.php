@extends('Layout.master')
@section('content')

<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        
        <div class="col-md-7">
            <div class="card p-3 py-4">
                <div class="text-center mt-3">
                    <span class="bg-primary p-1 px-4 rounded text-white" style="text-transform: uppercase;">{{ Auth::user()->role }}</span>
                    <h5 class="mt-2 mb-0">{{ Auth::user()->name }}</span>
                    
                    <div class="px-4 mt-1">
                        <p class="fonts">{{ Auth::user()->email }} </p>
                    
                    </div>
                    
                    
                    <div class="buttons" style="display: flex; justify-content: center;">
                        <form action="{{ route('admin-auction') }}" style="max-width: 300px;">
                            <button type="submit" class="btn-log btn-lg btn-outline-primary btn-login px-4">Auction Items&nbsp;<i class="fa fa-gavel"></i></button>
                        </form>
                        <form action="{{ route('admin-art') }}" style="max-width: 300px;">
                            <button type="submit" class="btn-log btn-lg btn-primary btn-login px-4 ms-3">Art Items&nbsp;<i class="bi bi-cart"></i></button>
                        </form>
                    </div>
                    
                    <div style="margin-top: 20px;">
                        <form action="{{ route('logout') }}">
                            <button class="btn-log btn-lg btn-danger btn-login text-uppercase fw-bold mb-2" type="submit" style="width: 150px; height: 50px;">Logout</button>
                        </form>
                    </div>
                    
                    
                </div>
                
               
                
                
            </div>
            
        </div>
        
    </div>
</div>


@endsection