<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\info_pinjam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function register()
    {
        $data['title'] = 'Register';
        return view('user/register', $data);
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:tb_user',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
        ]);

        $user = new User([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
        $user->save();

        return redirect()->route('login')->with('success', 'Registration success. Please login!');
    }


    public function login()
    {
        $data['title'] = 'Login';
        return view('user/login', $data);
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);
    }

    public function password()
    {
        $data['title'] = 'Change Password';
        return view('user/password', $data);
    }

    public function password_action(Request $request)
    {
        $request->validate([
            'old_password' => 'required|current_password',
            'new_password' => 'required|confirmed',
        ]);
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->regenerate();
        return back()->with('success', 'Password changed!');
    }

    public function logout()
    {
        unset($_SESSION['admin']); // hanya delete variable "name" saja
        unset($_SESSION['user']); // hanya delete variable "name" saja
        // session_destroy(); // delete SEMUA variable data user tersebut
        header('Location: http://localhost/kitabaca/public/logout.php');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Users Management";
        $users = User::all();
        return view(
            'admin.users.index',
            [
                'users' => $users,
                'title' => $title,
            ]
        );
    }

    public function searchs(Request $request)
    {
        $users = User::all();
        if ($request->search != '') {
            $output = "";
            $users = User::where('nama', 'LIKE', '%' . $request->search . '%')->get();
        }

        return response()->json([
            'users' => $users,
        ]);
    }

    public function show($id)
    {
        $user = User::find($id);
        // $histori = info_pinjam::where('id_pengguna', '=', $id)->get();
        // $status = array([]);
        // foreach ($histori as $hist) {
        //     if (info_kembali::where('id_pinjam', '=', $hist->id_pinjam)->first() == null) {
        //         $st = 'Finished';
        //     } else {
        //         $st = 'Ongoing';
        //     }
        //     array_push($status, $st);
        // }
        $loan = info_pinjam::join('buku', 'buku.id', '=', 'info_pinjam.id')->join('info_kembali', 'info_kembali.id_pinjam', '=', 'info_pinjam.id_pinjam')
            ->get(['info_pinjam.id_pinjam', 'info_pinjam.waktu_pinjam', 'info_pinjam.id', 'buku.judul']);
        return view(
            'admin.users.detail',
            [
                'user' => $user,
                'loansh' => $loan,
                // 'status' => $status,
            ]
        );
    }

    // public function login(Request $request)
    // {

    //     $user = User::where(['email' => $request->email])->first();
    //     $password = User::where(['password' => $request->password])->first();

    //     //return 'User:' . $user . '<br>Password:' . $password;

    //     if (!$user || !$password) {
    //         //return "Username or password is not matched";
    //         return back()->with('success', 'Username or password is not matched');
    //     } else {
    //         $request->session()->put('user', $user);
    //         return redirect('/dashboard');
    //     }
    // }
}
