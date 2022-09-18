<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name='description' content=" {{ $metaDescription ?? 'Default meta description' }}" />
    <title>Pasber {{ $title ?? ''}}</title>
    @vite(['resources/js/app.js', 'resources/css/app.scss',])
    <script src="{{ asset('jquery.js') }}"></script>
</head>
<body cz-shortcut-listen="true">

    <!-- Content here -->
    <x-header></x-header>

    <div class="container-fluid">
        <div class="row">

            <x-nav></x-nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">{{ $title ?? ''}}</h1>
                </div>
                {{ $slot }}

            </main>
        </div>
    </div>
</body>
</html>
