@php
  // if (!(isset($_SESSION['admin']))) {
  //   header('location: http://localhost/kitabaca/public/pages/login.php');
  //   exit();
  // }

  if (!isset($_GET['token'])) {
    header('location: http://localhost/kitabaca/public/pages/login.php');
    exit();
  }

  $token = $_GET['token'];
  
  $hostname = 'localhost';
  $username = 'root';
  $password = '123456';
  $database = 'kitakita';

  $conn = mysqli_connect($hostname, $username, $password, $database);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $admin = mysqli_query($conn, "SELECT * FROM admin WHERE token='$token'");
  if ($admin->num_rows == 0) {
    header('location: http://localhost/kitabaca/public/pages/login.php');
    exit();
  }

  else {
    $admin = $admin->fetch_assoc();
    $_SESSION['admin'] = $admin;
  }
  // var_dump($_SESSION);
@endphp

<nav
  class="bg-white border-b-2 border-zinc-100 top-0 inset-x-0 fixed h-14 z-30 transition-position w-screen lg:w-auto xl:pl-56">
  <div class="flex lg:items-stretch xl:max-w-6xl xl:mx-auto">
    <div class="flex flex-1 items-stretch h-14">
      {{-- tempat search bar --}}
    </div>
    {{-- <div class="flex-none items-stretch flex h-14 lg:hidden"></div> --}}
    <div
      class="max-h-screen-menu overflow-y-auto lg:overflow-visible absolute w-screen left-0 lg:w-auto lg:flex lg:static lg:shadow-nonehidden">
      <div class="block lg:flex items-center relative cursor-pointer text-blue-600 hover:text-black lg:px-3">
        <div class="flex items-center bg-gray-100 lg:bg-transparent p-3 lg:p-0">
          <div class="me-3">
            <div class="w-6 h-6 mr-3 inline-flex">
              <img
                src="https://avatars.dicebear.com/api/avataaars/example.svg?options[top][]=shortHair&options[accessoriesChance]=93"
                class="rounded-full block h-auto w-full max-w-full bg-gray-100">
            </div>
            <span class="px-2 transition-colors">{{ $_SESSION['admin']['nama']  }}</span>
            <span class="inline-flex justify-center items-center w-6 h-6 lg:inline-flex transition-colors">
              <svg viewBox="0 0 24 24" width="16" height="16" class="inline-block">
                <path fill="currentColor" d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"></path>
              </svg>
            </span>
          </div>
{{-- 
          <a href={{ route('logout') }} onclick="return confirm('Yakin ingin logout?')"
            class="text-danger">Logout</a> --}}
            {{-- @csrf --}}
            <a href="{{ url('http://localhost/kitabaca/public/logout.php') }}" onclick="{{ out(); }}" class="text-danger">Logout</a>
            {{-- <a href="{{ route('dashboard.logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                Logout
            </a>    
            <form id="frm-logout" action="{{ route('dashboard.logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form> --}}
        </div>
      </div>

    </div>
  </div>
</nav>
