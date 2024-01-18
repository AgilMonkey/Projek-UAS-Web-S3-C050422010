@extends('layouts.app')

@section('title', 'Edit Form')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Form</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Form</a></div>
                    <div class="breadcrumb-item">Edit Form</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="{{ route('form.update', $form) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Edit Form</h4>
                        </div>
                        <div class="card-body">
                            <!-- First name -->
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text"
                                    class="form-control @error('first_name')
                                    is-invalid
                                @enderror"
                                    name="first_name" value="{{ $form->first_name }}">
                                @error('first_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Last Name -->
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text"
                                    class="form-control @error('last_name')
                                    is-invalid
                                @enderror"
                                    name="last_name" value="{{ $form->last_name }}">
                                @error('last_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Username -->
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text"
                                    class="form-control @error('username')
                                    is-invalid
                                @enderror"
                                    name="username" value="{{ $form->username }}">
                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email"
                                    class="form-control @error('email')
                                    is-invalid
                                @enderror"
                                    name="email" value="{{ $form->email }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password"
                                    class="form-control @error('password')
                                    is-invalid
                                @enderror"
                                    name="password" value="{{ $form->password }}">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Alamat -->
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text"
                                    class="form-control @error('alamat')
                                    is-invalid
                                @enderror"
                                    name="alamat" value="{{ $form->alamat }}">
                                @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Provinsi -->
                            <div class="form-group">
                                <label>Provinsi</label>
                                <input type="text"
                                    class="form-control @error('provinsi')
                                    is-invalid
                                @enderror"
                                    name="provinsi" value="{{ $form->provinsi }}">
                                @error('provinsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Negara -->
                            <div class="form-group">
                                <label>Negara</label>
                                <input type="text"
                                    class="form-control @error('negara')
                                    is-invalid
                                @enderror"
                                    name="negara" value="{{ $form->negara }}">
                                @error('negara')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Kode post -->
                            <div class="form-group">
                                <label>Kode post</label>
                                <input type="text"
                                    class="form-control @error('kode_post')
                                    is-invalid
                                @enderror"
                                    name="kode_post" value="{{ $form->kode_post }}">
                                @error('kode_post')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Handphone -->
                            <div class="form-group">
                                <label>Handphone</label>
                                <input type="text" class="form-control" name="handphone" value="{{ $form->handphone }}">
                            </div>

                            <!-- Captcha -->
                            <div class="form-group">
                                <label>Captcha</label>
                                <div class="form-control @error('captcha')
                                    is-invalid
                                @enderror">
                                    <input type="checkbox" class="form-group"
                                    name="captcha" value="{{ $form->captcha }}">
                                    <span>Apakah anda bukan robot ?</span>
                                </div>
                                @error('captcha')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
