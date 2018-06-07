<?php

namespace App\Http\Controllers\Users;

use App\Http\Requests\TaskRequest;
use App\Repositories\TaskRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;

class TaskController extends UserController
{
    /**
     * @var UserRepository
     */
    private $userRepository;

    private $taskRepository;

    /**
     * TaskController constructor.
     * @param UserRepository $userRepository
     */
    public function __construct(
        UserRepository $userRepository,
        TaskRepository $taskRepository
    )
    {
        parent::__construct();

        $this->userRepository = $userRepository;
        $this->taskRepository = $taskRepository;

        view()->share('type', 'task');
    }
    public function index()
    {
        $title = trans('task.tasks');
        $users = $this->userRepository->getAllNew()->get()
            ->filter(function ($user) {
                return ($user->inRole('staff') || $user->inRole('admin'));
            })
            ->map(function ($user) {
                return [
                    'name' => $user->full_name .' ( '.$user->email.' )' ,
                    'id' => $user->id
                ];
            })
            ->pluck('name', 'id')->prepend(trans('task.user'),'');

        return view('user.task.index', compact('title','users'));
    }

    public function store(TaskRequest $request)
    {
        $task = $this->taskRepository->create($request->except('_token','full_name'));
        return $task->id;
    }


    public function update($task, Request $request)
    {
        $task = $this->taskRepository->find($task);
        $task->update($request->except('_method', '_token'));
    }

    public function delete($task)
    {
        $task = $this->taskRepository->find($task);
        $task->delete();

    }

    /**
     * Ajax Data
     */
    public function data()
    {
        $user = $this->userRepository->getUser();
        return $this->taskRepository->orderBy("finished", "ASC")
            ->orderBy("task_deadline", "DESC")->all()->where('user_id', $user->id)
            ->map(function ($task) {
                return [
                    'task_from' => $task->task_from_users->full_name,
                    'id' => $task->id,
                    'finished' => $task->finished,
                    'task_deadline' => $task->task_deadline,
                    "task_description" => $task->task_description,
                ];
            });

    }
}