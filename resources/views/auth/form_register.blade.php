<div class="container">
    <form action="{{ url('/register') }}" method="POST">
        @csrf
        <!-- Nama Lengkap -->
        <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama Lengkap" style="width: 80%">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Nomor Telepon -->
        <div class="mb-3">
            <label for="telp" class="form-label">Nomor Telepon</label>
            <input type="text" name="telp" class="form-control @error('telp') is-invalid @enderror" id="telp" placeholder="Nomor Telepon" style="width: 80%">
            @error('telp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" style="width: 80%">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" style="width: 80%">
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" style="width: 80%">
        </div>

        <button type="submit" class="btn" style="width:80%; background-color: #FF4800; color:white;">Daftar</button>
    </form>
</div>
