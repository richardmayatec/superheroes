<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container py-5">
        <div class="row mb-4">
            <div class="col">
                <header class="bg-primary py-4 text-center">
                    <h1 class="text-white mb-0">Logos</h1>
                </header>
            </div>
        </div>


        <div class="row">
            <div class="col">

                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th style="width:20%;">Logo</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($logos as $logo)
                            <tr>
                                <td>{{ $logo->id }}</td>
                                <td>
                                    <img src="{{ $logo->logo_url }}" alt="" class="img-fluid w-100">
                                </td>
                                <td>Actions</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">There are no logos yet.</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>
</html>