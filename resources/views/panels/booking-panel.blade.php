@php

    $levelAmount = 'level';

    if (Auth::User()->level() >= 2) {
        $levelAmount = 'levels';

    }

@endphp

<div class="card">
    <div class="card-header @role('admin', true) bg-secondary text-white @endrole">
        Booking Service
    </div>
    <div class="card-body">
        <form method="POST" action="/booking">
            @csrf

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Merk</label>

                <div class="col-md-6">
                    <select id="merk" name="merk" class="form-control" required autofocus>
                        <option value="SUZUKI">SUZUKI</option>
                        <option value="HONDA">HONDA</option>
                        <option value="YAMAHA">YAMAHA</option>
                    </select>

                    @if ($errors->has('merk'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('merk') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="varian" class="col-md-4 col-form-label text-md-right">Tipe/Varian</label>

                <div class="col-md-6">
                    <input id="varian" type="text" class="form-control{{ $errors->has('varian') ? ' is-invalid' : '' }}" name="varian" value="{{ old('varian') }}" required autofocus>

                    @if ($errors->has('varian'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('varian') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="nopol" class="col-md-4 col-form-label text-md-right">Nomor Polisi</label>

                <div class="col-md-6">
                    <input id="nopol" type="text" class="form-control{{ $errors->has('nopol') ? ' is-invalid' : '' }}" name="nopol" value="{{ old('nopol') }}" required autofocus>

                    @if ($errors->has('nopol'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('nopol') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>

            <div class="form-group row mb-4">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Booking
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>
