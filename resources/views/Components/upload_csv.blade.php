{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload CSV</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="max-w-md mx-auto my-10 p-5 border rounded">
    <h1 class="text-2xl font-bold mb-5">Upload CSV File</h1>

    @if ($errors->any())
        <div class="mb-4">
            <ul class="text-red-500">
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="mb-4 text-green-500">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="mb-4 text-red-500">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('import-csv') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="file" class="block text-lg font-semibold">Choose CSV File</label>
            <input type="file" name="file" id="file" accept=".csv" class="mt-2 p-2 border rounded w-full">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Import</button>
    </form>
</div>
</body>
</html> --}}
