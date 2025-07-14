<h2>Register Admin</h2>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<form action="{{ url('/admin/register') }}" method="post">
    @csrf
    <label>Nama:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <label>Role:</label><br>
    <select name="role">
        <option value="admin">Admin Hotel</option>
        <option value="superadmin">Super Admin</option>
    </select><br><br>

    <button type="submit">Register</button>
</form>
<a href="/admin/login">Login di sini</a>
