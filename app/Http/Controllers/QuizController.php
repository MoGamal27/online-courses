namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        return Quiz::all();
    }

    public function store(Request $request)
    {
        $quiz = Quiz::create($request->all());
        return response()->json($quiz, 201);
    }

    public function show($id)
    {
        return Quiz::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $quiz = Quiz::findOrFail($id);
        $quiz->update($request->all());
        return response()->json($quiz, 200);
    }

    public function destroy($id)
    {
        Quiz::destroy($id);
        return response()->json(null, 204);
    }
}
