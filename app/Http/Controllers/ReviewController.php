namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        return Review::all();
    }

    public function store(Request $request)
    {
        $review = Review::create($request->all());
        return response()->json($review, 201);
    }

    public function show($id)
    {
        return Review::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $review = Review::findOrFail($id);
        $review->update($request->all());
        return response()->json($review, 200);
    }

    public function destroy($id)
    {
        Review::destroy($id);
        return response()->json(null, 204);
    }
}
