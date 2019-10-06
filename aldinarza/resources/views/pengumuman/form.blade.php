@csrf
<div class="form-group row">
    <label for="judul" class="col-md-2 col-form-label text-md-right">{{ __('Judul') }}</label>

        <div class="col-md-10">
            <input id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" required autofocus>
            
                @error('judul')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
</div>
<div class="form-group row">
    <label for="kategori_pengumuman_id" class="col-md-2 col-form-label text-md-right">{{ __('kategori pengumuman id') }}</label>

        <div class="col-md-10">
            {!! Form::select('kategori_pengumuman_id', $KategoriPengumuman,null, ["class"=>"form-control","required"] ) !!}

                @error('kategori pengumuman id')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
</div>
<div class="form-group row">
    <label for="isi" class="col-md-2 col-form-label text-md-right">{{ __('isi') }}</label>

        <div class="col-md-10">
            {!! Form::textarea('isi', null,['class'=>'form-control']); !!}

                @error('isi')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
</div>

<input id="users_id" type="hidden" class="form-control @error('users_id') is-invalid @enderror" name="users_id" value="{{ Auth::id() }}" required>

            <div class="form-group row mb-0">
                            <div class="col-md-10 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Simpan Data') }}
                                </button>
                                <a href="{!! route('pengumuman.index') !!}" class="btn btn-danger">
                                    {{ __('Batal') }}
                                </a>
                            </div>
                        </div>
