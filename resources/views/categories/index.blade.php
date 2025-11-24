<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film List</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gradient-to-br from-pink-100 via-white to-blue-100 py-10">

    <div class="max-w-5xl mx-auto">

        <!-- TITLE -->
        <h1 class="text-3xl font-semibold text-blue-700 text-center mb-8 p-4 rounded-xl shadow-md bg-white">
            Film List by Category
        </h1>

        <!-- DROPDOWN FILTER -->
        <div class="mb-6 flex justify-center">
            <form action="" method="GET">
                <select 
                    onchange="window.location.href='/category/' + this.value"
                    class="p-3 rounded-lg bg-white shadow-md text-blue-600 border border-pink-200">

                    <option value="">-- All Categories --</option>

                    @foreach ($categories as $cat)
                        <option 
                            value="{{ $cat->name }}" 
                            @if(isset($categoryName) && $categoryName == $cat->name) selected @endif>
                            {{ $cat->name }}
                        </option>
                    @endforeach
                </select>
            </form>
        </div>

        <!-- TABEL FILM -->
        <div class="bg-white/40 backdrop-blur-sm rounded-2xl shadow-lg p-6">

            <table class="w-full border-collapse text-gray-700">
                <thead>
                    <tr>
                        <th class="border border-pink-200 bg-gradient-to-r from-pink-100 to-blue-100 p-3 font-medium">Title</th>
                        <th class="border border-pink-200 bg-gradient-to-r from-pink-100 to-blue-100 p-3 font-medium">Description</th>
                        <th class="border border-pink-200 bg-gradient-to-r from-pink-100 to-blue-100 p-3 font-medium">Year</th>
                        <th class="border border-pink-200 bg-gradient-to-r from-pink-100 to-blue-100 p-3 font-medium">Rating</th>
                        <th class="border border-pink-200 bg-gradient-to-r from-pink-100 to-blue-100 p-3 font-medium">Length</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($films as $f)
                        <tr class="hover:bg-pink-50 transition">
                            <td class="border border-pink-200 p-3">{{ $f->title }}</td>
                            <td class="border border-pink-200 p-3">{{ $f->description }}</td>
                            <td class="border border-pink-200 p-3">{{ $f->release_year }}</td>
                            <td class="border border-pink-200 p-3">{{ $f->rating }}</td>
                            <td class="border border-pink-200 p-3">{{ $f->length }} min</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>

</body>
</html>
