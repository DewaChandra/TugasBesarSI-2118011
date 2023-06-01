@extends('templates.default')

@section('content')
<h1>Edit Data User</h1>
<div class="card">
    <div class="card-body">
        <form action="{{ route('user.update', $user->id) }}" class="" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
                    name="example-text-input" placeholder="Masukkan Nama" value="{{ old('name') ?? $user->name }}">
                @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                    name="example-text-input" placeholder="Masukkan email" value="{{ old('email') ?? $user->email }}">
                @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="text" name="password" class="form-control @error('password') is-invalid @enderror"
                    name="example-text-input" placeholder="Masukkan password" value="{{ old('password') ?? $user->password }}">
                @error('password')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb3">
                <input type="submit" value="Simpan" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>

@endsection