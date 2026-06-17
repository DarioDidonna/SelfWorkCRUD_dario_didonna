<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GustoDigitale</title>
    <link rel="icon" type="image/svg+xml"
        href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Crect width='100' height='100' rx='20' fill='%23E67E22'/%3E%3Cpath d='M30 50 C25 35, 45 25, 60 30 C75 35, 75 60, 65 70 C50 80, 25 70, 30 50 Z' fill='%23FFFFFF'/%3E%3Ccircle cx='50' cy='50' r='14' fill='%23F1C40F'/%3E%3Ccircle cx='46' cy='46' r='4' fill='%23FFFFFF' opacity='0.6'/%3E%3C/svg%3E">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <x-navbar />

    <div class="min-vh-100">
        {{ $slot }}
    </div>

    <x-footer />

</body>

</html>
