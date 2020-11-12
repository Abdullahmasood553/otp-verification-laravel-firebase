
@extends('layouts.master')


@section('content')


<section class="validOTPForm">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h4 class="text-center">
                            Account verification
                        </h4>
                    </div>


                    <div class="card-body">
                        <form>
                            @csrf
                            <div class="form-group">
                                <label for="phone_no">Phone Number</label>

                                <input type="text" class="form-control" name="phone_no" id="number" placeholder="(Code) *******">
                            </div>
                            <div id="recaptcha-container"></div>
                                <a href="#" id="getcode" class="btn btn-dark btn-sm">Get Code</a>

                                <div class="form-group mt-4">
                                    <input type="text" name="" id="codeToVerify" name="getcode" class="form-control" placeholder="Enter Code">
                                </div>

                                <a href="#" class="btn btn-dark btn-sm btn-block" id="verifPhNum">Verify Phone No</a>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/8.0.1/firebase.js"></script>
<script src="{{ asset('assets/js/firebase.js') }}"></script>


@endpush





