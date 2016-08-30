<?php

/*
 * This file is part of php-task library.
 *
 * (c) php-task
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Task\Execution;

use Task\TaskInterface;

/**
 * Interface for task-execution repository.
 */
interface TaskExecutionRepositoryInterface
{
    /**
     * Store task-execution.
     *
     * @param TaskExecutionInterface $execution
     *
     * @return $this
     */
    public function store(TaskExecutionInterface $execution);

    /**
     * Save task-execution.
     *
     * @param TaskExecutionInterface $execution
     *
     * @return $this
     */
    public function save(TaskExecutionInterface $execution);

    /**
     * Used to check whether a specific task has been scheduled at a specific time.
     *
     * @param TaskInterface $task
     * @param \DateTime $scheduleTime
     *
     * @return TaskExecutionInterface
     */
    public function findByStartTime(TaskInterface $task, \DateTime $scheduleTime);

    /**
     * Returns all task-executions.
     *
     * @param int|null $limit
     *
     * @return TaskExecutionInterface[]
     */
    public function findAll($limit = null);

    /**
     * Returns scheduled task-executions.
     *
     * Scheduled-time in the past.
     *
     * @return TaskExecutionInterface[]
     */
    public function findScheduled();
}
