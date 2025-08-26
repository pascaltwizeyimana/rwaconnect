namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;   // assuming posts store videos/music/news etc.

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        // Search users (accounts)
        $users = User::where('name', 'LIKE', "%{$query}%")
                     ->orWhere('username', 'LIKE', "%{$query}%")
                     ->get();

        // Search posts (videos, music, movies, news, trends)
        $posts = Post::where('title', 'LIKE', "%{$query}%")
                     ->orWhere('description', 'LIKE', "%{$query}%")
                     ->orWhere('tags', 'LIKE', "%{$query}%")
                     ->get();

        return view('search.results', compact('query', 'users', 'posts'));
    }
}
