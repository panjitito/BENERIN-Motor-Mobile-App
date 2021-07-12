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
                <label for="tglservice" class="col-md-4 col-form-label text-md-right">Tanggal Service</label>

                <div class="col-md-6">
                    <input id="tglservice" type="date" class="form-control{{ $errors->has('tglservice') ? ' is-invalid' : '' }}" name="tglservice" value="{{ old('tglservice') }}" required>

                    @if ($errors->has('tglservice'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('tglservice') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="wktservice" class="col-md-4 col-form-label text-md-right">Waktu Service</label>

                <div class="col-md-6">
                    <select id="wktservice" name="wktservice" class="form-control" required autofocus>
                        <option value="08:30 WIB">08:30 WIB</option>
                        <option value="10:30 WIB">10:30 WIB</option>
                        <option value="12:30 WIB">12:30 WIB</option>
                        <option value="14:30 WIB">14:30 WIB</option>
                    </select>

                    @if ($errors->has('wktservice'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('wktservice') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="bengkel" class="col-md-4 col-form-label text-md-right">Bengkel</label>

                <div class="col-md-6">
                    <select id="bengkel" name="bengkel" class="form-control" required autofocus>
                        <option value="IBAR Jakarta">IBAR Jakarta</option>
                        <option value="IBAR Bandung">IBAR Bandung</option>
                        <option value="IBAR Semarang">IBAR Semarang</option>
                        <option value="IBAR Solo">IBAR Solo</option>
                        <option value="IBAR Surabaya">IBAR Surabaya</option>
                    </select>

                    @if ($errors->has('bengkel'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('bengkel') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="catatan" class="col-md-4 col-form-label text-md-right">Catatan</label>

                <div class="col-md-6">
                    <textarea id="catatan" name="catatan" class="form-control"></textarea>
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
