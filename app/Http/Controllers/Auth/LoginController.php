<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Posts;
use App\Models\Slides;
use App\Models\Video;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
        
    public function login(Request $request)
    {
        $categories = Category::all();
        $input = $request->all();
        $post = Posts::where('category_id', 1)->inRandomOrder()->get();

        $any = Posts::inRandomOrder()->first();

        $posts = Posts::orderBy('updated_at', 'desc')
            ->skip(0)
            ->take(3)
            ->get();
        $popular = Posts::inRandomOrder('updated_at')
            ->take(3)
            ->get();
        
            $topopular = Posts::inRandomOrder('updated_at')
            ->take(7)
            ->get();

        $latest = Posts::latest()->first();

        $slides = Slides::latest()->get();

        $videos = Video::inRandomOrder()->first();

        $video = Video::latest()->first();

        $categories = Category::all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (
            auth()->attempt([
                'email' => $input['email'],
                'password' => $input['password'],
            ])
        ) {
            return redirect()->route('admin');
        } else {
            return Redirect::back()->withErrors([
                'Wrong Login credential, try again!!',
            ]);
        }
    }
}
