<div class="container">
        <form action="{{ route('login.submit') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email"
                placeholder="name@example.com" style="width: 80%">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" style="width: 80%">
        </div>
        <div id="passwordHelpBlock" class="form-text" style="width: 80%">
            Your password must be 8-20 characters long, contain letters and numbers, and
            must
            not
            contain spaces, special characters, or emoji.
        </div>
        <button type="submit" class="btn"
        style="width:80%; background-color: #FF4800; color:white;">Masuk
    </button>
</form>
</div>