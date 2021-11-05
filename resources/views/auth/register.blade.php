@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center text-light">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('registers') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Registration Type') }} : </label>

                            <div class="col-md-8 mt-2">
                                <input type="checkbox" id="checkone" name="registration_type" value="1" onclick="onlyOne(this)">
                                <label for="checkone"> Proprietorship Company</label>
                                <input type="checkbox" title="পার্টনারশিপ মালিকগন যেকোনো একজন মালিকের নাম লিখুন ।" id="checktwo" name="registration_type" value="2" onclick="onlyOne(this)">
                                <label for="checktwo" title="পার্টনারশিপ মালিকগন যেকোনো একজন মালিকের নাম লিখুন ।"> Limited and Partnership Company</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Company Name(Bengali) :') }}</label>

                            <div class="col-md-6">
                                <input style="font-size:12px;" id="company_name_in_bangla" placeholder="দয়া করে ট্রেড লাইসেন্স থেকে প্রতিষ্ঠানের নাম লিখুন।" type="text" class="form-control @error('company_name_in_bangla') is-invalid @enderror" name="company_name_in_bangla" value="{{ old('company_name_in_bangla') }}" required autocomplete="name" autofocus>

                                @error('company_name_in_bangla')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Company Name(English) :') }}</label>

                            <div class="col-md-6">
                                <input style="font-size:14px;" id="company_name_in_english" placeholder="Please write the company name from trade licence." type="text" class="form-control @error('company_name_in_english') is-invalid @enderror" name="company_name_in_english" value="{{ old('company_name_in_english') }}" required autocomplete="name" autofocus>

                                @error('company_name_in_english')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label title="পার্টনারশিপ মালিকগন যেকোনো একজন মালিকের নাম লিখুন ।" for="name" class="col-md-4 col-form-label text-md-right">{{ __('Full Name(Bengali) :') }}</label>

                            <div class="col-md-6">
                                <input style="font-size:12px;" id="full_name_in_bengali" placeholder="দয়া করে ট্রেড লাইসেন্স থেকে মালিকের নাম লিখুন।" type="text" class="form-control @error('full_name_in_bengali') is-invalid @enderror" name="full_name_in_bengali" value="{{ old('full_name_in_bengali') }}" required autocomplete="name" autofocus>

                                @error('full_name_in_bengali')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Full Name(English) :') }}</label>

                            <div class="col-md-6">
                                <input style="font-size:14px;" id="full_name_in_english" placeholder="Please write the owner name from trade licence." type="text" class="form-control @error('full_name_in_english') is-invalid @enderror" name="full_name_in_english" value="{{ old('full_name_in_english') }}" required autocomplete="name" autofocus>

                                @error('full_name_in_english')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Mobile No : ') }}</label>

                            <div class="col-md-6">
                                <input id="moible" type="text" class="form-control @error('email') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function onlyOne(checkbox) {
        var checkboxes = document.getElementsByName('registration_type')
        checkboxes.forEach((item) => {
            if (item !== checkbox) item.checked = false
        })
    }
</script>
@endsection
