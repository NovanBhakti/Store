<form action="{{ route('registrasi.submit') }}" method="POST">
    @csrf
    <label for="nama">Nama:</label>
    <input type="text" name="nama" required>
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <button type="submit">Daftar</button>
</form>