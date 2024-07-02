namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index()
    {
        return Lesson::all();
    }

    public function store(Request $request)
    {
        $lesson = Lesson::create($request->all());
        return response()->json($lesson, 201);
    }

    public function show($id)
    {
        return Lesson::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $lesson = Lesson::findOrFail($id);
        $lesson->update($request->all());
        return response()->json($lesson, 200);
    }

    public function destroy($id)
    {
        Lesson::destroy($id);
        return response()->json(null, 204);
    }
}
