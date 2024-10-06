<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use App\Repositories\Todo\TodoRepositoryContract;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\Dashboard\DashboardCreateRequest;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __construct(
        private readonly TodoRepositoryContract $todoRepository,
    ) {
    }
    /**
     * Show the confirm password view.
     */
    public function show(): View
    {
        return view('dashboard.list');
    }

    public function create(): View
    {
        return view('dashboard.create');
    }

    public function store(DashboardCreateRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $todo = $this->todoRepository->createTodo($validated);

        return redirect()->route('dashboard.list')->with('status', 'Todo created successfully!');
    }
}
