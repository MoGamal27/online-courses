use App\Http\Controllers\LessonController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ReviewController;

// Lessons Routes
Route::middleware('auth:sanctum')->group(function () {
    Route::get('lessons', [LessonController::class, 'index']);
    Route::post('lessons', [LessonController::class, 'store']);
    Route::get('lessons/{id}', [LessonController::class, 'show']);
    Route::put('lessons/{id}', [LessonController::class, 'update']);
    Route::delete('lessons/{id}', [LessonController::class, 'destroy']);
});

// Quizzes Routes
Route::middleware('auth:sanctum')->group(function () {
    Route::get('quizzes', [QuizController::class, 'index']);
    Route::post('quizzes', [QuizController::class, 'store']);
    Route::get('quizzes/{id}', [QuizController::class, 'show']);
    Route::put('quizzes/{id}', [QuizController::class, 'update']);
    Route::delete('quizzes/{id}', [QuizController::class, 'destroy']);
});

// Reviews Routes
Route::middleware('auth:sanctum')->group(function () {
    Route::get('reviews', [ReviewController::class, 'index']);
    Route::post('reviews', [ReviewController::class, 'store']);
    Route::get('reviews/{id}', [ReviewController::class, 'show']);
    Route::put('reviews/{id}', [ReviewController::class, 'update']);
    Route::delete('reviews/{id}', [ReviewController::class, 'destroy']);
});

