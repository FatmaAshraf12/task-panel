<?php


namespace App\Repositories\Task;

interface TaskRepositoryInterface
{
    public function store($request);
    public function index();

}