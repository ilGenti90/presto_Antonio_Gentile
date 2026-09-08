<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presto</title>

    @vite(['resources/js/app.js', 'resources/css/app.css'])

</head>

<body>
    
    <!-- navbar -->
    <x-navbar></x-navbar>
    <!-- fine navbar -->

    <!-- canvas matrix -->
    <canvas id="matrix"> </canvas>
    <!-- fine canvas matrix -->

    <!-- OVERLAY BLUR (full page) -->
  <div class="overlay"></div>
  <!-- fine overlay -->




<!-- main content -->
 <main class = 'min-vh-100' style="position: relative; z-index: 4;">
    {{ $slot }}
</main>

<!-- fine main content -->

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/6f792b5773.js" crossorigin="anonymous"></script>
    <!-- fine fontawesome -->

<!-- footer -->
    <x-footer></x-footer>
    <!-- fine footer -->

</body>

</html>