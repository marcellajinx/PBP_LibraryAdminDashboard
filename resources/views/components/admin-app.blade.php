@php
session_start();
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  {{-- <script>
        tailwind.config = {
            corePlugins: {
                    preflight: false,
            },
        }
    </script> --}}
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&family=Nunito+Sans&family=Source+Sans+Pro&display=swap"
    rel="stylesheet">
  <title>KitaBaca</title>
</head>

<body>
  <div class="xl:pl-56 pt-14 min-h-screen w-screen transition-position lg:w-auto">
    <x-navbar-admin />
    <x-sidebar />
    <section class="border-b-2 border-zinc-100 pl-1 py-2">
      <div class="flex items-center justify-start">
        <span class="inline-flex justify-center items-center w-12 h-12 rounded-full bg-white text-black">
          <svg width="20" height="20" viewBox="0 0 24 24">
            <path fill="currentColor"
              d="M21,19A1,1 0 0,1 20,20H19V18H21V19M15,20V18H17V20H15M11,20V18H13V20H11M7,20V18H9V20H7M4,20A1,1 0 0,1 3,19V18H5V20H4M19,4H5A2,2 0 0,0 3,6V8H5L11,8H13L19,8H21V6C21,4.89 20.11,4 19,4M5,14H3V16H5V14M5,10H3V12H5V10M21,10H19V12H21V10M21,14H19V16H21V14M11,16V14H13V16H11M11,12V10H13V12H11">
            </path>
          </svg>
        </span>
        <h3 class="text-lg font-bold leading-tight">{{ $title }}</h3>
      </div>
    </section>

    <section class="bg-gray-50 p-6">
      {{ $slot }}
    </section>
  </div>
</body>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</html>
