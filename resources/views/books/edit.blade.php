
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
</head>
<body>
    <h2>Edit Buku</h2>

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label for="title">Judul Buku</label><br>
            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title', $book->title) }}"
                maxlength="255"
            >
            @error('title')
                <br><span style="color: red;">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label for="author">Penulis</label><br>
            <input
                type="text"
                id="author"
                name="author"
                value="{{ old('author', $book->author) }}"
                maxlength="255"
            >
            @error('author')
                <br><span style="color: red;">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label for="year">Tahun Terbit</label><br>
            <input
                type="number"
                id="year"
                name="year"
                value="{{ old('year', $book->year) }}"
                min="1900"
            >
            @error('year')
                <br><span style="color: red;">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label for="stock">Stok</label><br>
            <input
                type="number"
                id="stock"
                name="stock"
                value="{{ old('stock', $book->stock) }}"
                min="0"
            >
            @error('stock')
                <br><span style="color: red;">{{ $message }}</span>
            @enderror
        </p>

        <button type="submit">Simpan Perubahan</button>
        <a href="{{ route('books.index') }}">Kembali</a>
    </form>
</body>
</html>
