
<form method="POST" action="{{ route('password.update') }}">
    @csrf
    <label>Current Password</label>
<input type="password" name="current_password" required>
<br><br>
<label>New Password</label>
<input type="password" name="password" required>
<br><br>
<label>Confirm New Password</label>
<input type="password" name="password_confirmation" required>
<br><br>
<button type="submit">Change Password</button>
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <p style="color:red">{{ $error }}</p>
    @endforeach
@endif

@if (session('status'))
    <p style="color:green">{{ session('status') }}</p>
@endif
</form>