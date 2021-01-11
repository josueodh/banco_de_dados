<div class="row">
    <div class="form-group col-sm-12">
        <label for="name">Nome </label>
        <input type="text" name="name" id="name" autofocus class="form-control @error('name') is-invalid @enderror" required value="{{ old('name',$category->name) }}">
        @error('name')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
        @enderror
    </div>
</div>
