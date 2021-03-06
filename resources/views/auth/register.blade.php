@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-5">
            @if (session('error_message'))
                <div class="alert alert-danger font-weight-bold">{{ session('error_message') }}</div>
            @elseif (session('warning_message'))
                <div class="alert alert-warning font-weight-bold">{{ session('warning_message') }}</div>
            @elseif (session('info_message'))
                <div class="alert alert-info font-weight-bold">{{ session('info_message') }}</div>
            @elseif (session('success_message'))
                <div class="alert alert-success font-weight-bold">{{ session('success_message') }}</div>
            @endif


            <div class="card rounded-0 shadow-sm border-0">
                <div class="card-header text-uppercase font-weight-bold pt-4 pb-4 text-center" style="background-color: #ffce00; font-size: 17px;">{{ __('KOMMUTE CAR RESERVATION FORM') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('register') }}"  enctype="multipart/form-data" autocomplete="off">
                        @csrf

                        <div class="row">
                            <div class="col-md-4">
                                <h5 class="text-muted">Personal Information:</h5>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="name" class="col-form-label text-md-right font-weight-bold">{{ __('Firstname') }}</label>
                                <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror"  value="{{ old('name') }}" required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="middlename" class="col-form-label text-md-right font-weight-bold">{{ __('Middlename') }}</label>
                                <input id="middlename" name="middlename" type="text" class="form-control @error('middlename') is-invalid @enderror"  value="{{ old('middlename') }}" required  autofocus>

                                @error('middlename')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="surname" class="col-form-label text-md-right font-weight-bold">{{ __('Surname') }}</label>
                                <input id="surname" name="surname" type="text" class="form-control @error('surname') is-invalid @enderror"  value="{{ old('surname') }}" required  autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-4">
                                <label for="national_id" class=" col-form-label text-md-right font-weight-bold">{{ __('National ID') }} <small>(upload both Front and Back)</small></label>
                                <input type="file" id="myFile" name="national_id" multiple>
                            </div>

                            <div class="col-md-4">
                                <label for="email" class="col-form-label text-md-right font-weight-bold">{{ __('E-Mail') }}</label>
                                <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}" required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="dob" class="col-form-label text-md-right font-weight-bold">{{ __('Date of Birth ') }} <small>(use format dd/mm/yyyy)</small></label>
                                <input id="dob" name="dob" type="text" class="form-control @error('dob') is-invalid @enderror"  value="{{ old('dob') }}" required>

                                @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="phone" class="col-form-label text-md-right font-weight-bold">{{ __('Phone') }}</label>
                                <input id="phone" name="phone" type="text" class="form-control @error('phone') is-invalid @enderror"  value="{{ old('phone') }}" required>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="id_number" class="col-form-label text-md-right font-weight-bold">{{ __('ID Number') }}</label>
                                <input id="id_number" name="id_number" type="text" class="form-control @error('id_number') is-invalid @enderror"  value="{{ old('id_number') }}" required>

                                @error('id_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="kra_pin" class="col-form-label text-md-right font-weight-bold">{{ __('KRA Pin') }}</label>
                                <input id="kra_pin" name="kra_pin" type="text" class="form-control @error('kra_pin') is-invalid @enderror"  value="{{ old('kra_pin') }}" required>

                                @error('kra_pin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div><br>

                        <div class="row mt-5">
                            <div class="col-md-4">
                                <h5 class="text-muted">Residential:</h5>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="county" class="col-form-label text-md-right font-weight-bold">{{ __('County') }}</label>
                                <input id="county" name="county" type="text" class="form-control @error('county') is-invalid @enderror"  value="{{ old('county') }}" required  placeholder="e.g Nairobi">

                                @error('county')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="locality" class="col-form-label text-md-right font-weight-bold">{{ __('Locality') }}</label>
                                <input id="locality" name="locality" type="text" class="form-control @error('locality') is-invalid @enderror"  value="{{ old('locality') }}" required  placeholder="e.g Westlands">

                                @error('locality')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="street" class="col-form-label text-md-right font-weight-bold">{{ __('Street-Rd') }}</label>
                                <input id="street" name="street" type="text" class="form-control @error('street') is-invalid @enderror"  value="{{ old('street') }}" required  placeholder="e.g Ring Road">

                                @error('street')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>


                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="apartment" class="col-form-label text-md-right font-weight-bold">{{ __('Apartment') }}</label>
                                <input id="apartment" name="apartment" type="text" class="form-control @error('apartment') is-invalid @enderror"  value="{{ old('apartment') }}" required  placeholder="e.g Crescent Apartments">

                                @error('apartment')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>

                        <div class="row mt-5">
                            <div class="col-md-6">
                                <h5 class="text-muted">Occupation: (employed applicants)</h5>
                            </div>
                        </div>


                        <div class="form-group row">

                            <div class="col-md-4">
                                <label for="employer" class=" col-form-label text-md-right font-weight-bold">{{ __('Employer') }}</label>
                                <input id="employer" name="employer" type="text" class="form-control @error('employer') is-invalid @enderror"  value="{{ old('employer') }}">
                                @error('employer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-md-4">
                                <label for="employed_net_income" class=" col-form-label text-md-right font-weight-bold">{{ __('Net Income') }}</label>
                                <input id="employed_net_income" name="employed_net_income" type="text" class="form-control @error('employed_net_income') is-invalid @enderror"  value="{{ old('employed_net_income') }}">
                                @error('employed_net_income')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-md-4">
                                <label for="expenses" class=" col-form-label text-md-right font-weight-bold">{{ __('Expenses') }}</label>
                                <input id="expenses" name="expenses" type="text" class="form-control @error('expenses') is-invalid @enderror"  value="{{ old('expenses') }}">
                                @error('expenses')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>

                        <div class="form-group row">

                            <div class="col-md-4">
                                <label for="employed_bank_statements" class=" col-form-label text-md-right font-weight-bold">{{ __('Bank Statement') }} <small>(attach 6 months statement)</small></label>
                                <input type="file" id="myFile" name="employed_bank_statements">
                            </div>

                            <div class="col-md-4">
                                <label for="employed_mpesa_statements" class=" col-form-label text-md-right font-weight-bold">{{ __('Mpesa Statement') }} <small>(attach 6 months statement)</small></label>
                                <input type="file" id="myFile" name="employed_mpesa_statements">
                            </div>
                        </div><br>


                        <div class="row mt-5">
                            <div class="col-md-6">
                                <h5 class="text-muted">Occupation: (self employed / Business applicants)</h5>
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="business_name" class=" col-form-label text-md-right font-weight-bold">{{ __('Business Name') }}</label>
                                <input id="business_name" name="business_name" type="text" class="form-control @error('business_name') is-invalid @enderror"  value="{{ old('business_name') }}">
                                @error('business_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="gross_business_income" class=" col-form-label text-md-right font-weight-bold">{{ __('Gross Business Income') }}</label>
                                <input id="gross_business_income" name="gross_business_income" type="text" class="form-control @error('gross_business_income') is-invalid @enderror"  value="{{ old('gross_business_income') }}">
                                @error('gross_business_income')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="self_net_income" class=" col-form-label text-md-right font-weight-bold">{{ __('Net Income') }}</label>
                                <input id="self_net_income" name="self_net_income" type="text" class="form-control @error('self_net_income') is-invalid @enderror"  value="{{ old('self_net_income') }}">
                                @error('self_net_income')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="cr12_certificate" class=" col-form-label text-md-right font-weight-bold">{{ __('CR12 Certificate') }} </label>
                                <input type="file" id="myFile" name="cr12_certificate">
                            </div>

                            <div class="col-md-4">
                                <label for="kra_certificate" class=" col-form-label text-md-right font-weight-bold">{{ __('KRA Certificate') }} </label>
                                <input type="file" id="myFile" name="kra_certificate">
                            </div>

                            <div class="col-md-4">
                                <label for="incorporation_certificate" class=" col-form-label text-md-right font-weight-bold">{{ __('Incorporation Certificate') }} </label>
                                <input type="file" id="myFile" name="incorporation_certificate">
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="self_bank_statements" class=" col-form-label text-md-right font-weight-bold">{{ __('Bank Statement') }} <small>(6 months statement)</small></label>
                                <input type="file" id="myFile" name="self_bank_statements">
                            </div>

                            <div class="col-md-4">
                                <input type="text" name="vehicle_id" hidden value="{{ $car_details->id }}">
                            </div>
                        </div><br>



                        <div class="form-group row mt-3 mb-0">
                            <div class="col-md-8">
                                <button type="submit" class="btn col-md-4 font-weight-bold pt-2 pb-2 pr-5 pl-5" style="background-color: #ffce00;">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <div class="col-md-8">
                                Already have an account?
                                <a class="text-muted" href="{{ url('login') }}">
                                    Login
                                </a>
                                or
                                <a class="text-muted" href="{{ url('/') }}">
                                    Go back to website
                                </a>
                            </div>
                        </div><br>

                        <div class="form-group row mt-4">
                            <div class="col-md-12">
                                <p><strong>DISCLAIMER:</strong> The information shared above is strictly for financing purposes and is entrusted to kommute alone and wont be
                                shared with any other part. Read more on our <a href="">Privacy Policy</a>, <a href="">Terms and conditions</a> or fill our <a href="">Don't sell my information form.</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
