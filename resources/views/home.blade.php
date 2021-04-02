@extends('layout')
@section('content')
    {{ session()->forget('order') }}
    <section id="home-search" class="d-flex align-items-center">
        <div class="container position-relative text-center text-lg-center" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-3"></div>

                <div>
                    <h1>Welcome to <span>Foodies</span></h1>
                    <h2>Delivering great food for more than 18 years!</h2>

                    <div class="search-function d-flex justify-content-center">
                        <form method="post" action="{{ route('searchresults') }}" class="customerPostalCode "
                            id="customerPostalCode" name="customerPostalCode">
                            @csrf
                            <div d-flex justify-content-center>
                                <input type="text" class="customerPostalCode" name="customerPostalCode"
                                    id="customerPostalCode" value="9712AX" required>
                                <button class="button" type="submit"><span>Search</span></button>
                                <p>{{ $errors->first('customerPostalCode') }}</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
