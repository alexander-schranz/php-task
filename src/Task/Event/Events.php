<?php

namespace Task\Event;

final class Events
{
    /**
     * Emitted when new new tasks created.
     */
    const TASK_CREATE = 'tasks.create';

    /**
     * Emitted when task will be started.
     */
    const TASK_BEFORE = 'tasks.before';

    /**
     * Emitted when after task finished.
     */
    const TASK_AFTER = 'tasks.after';

    /**
     * Emitted when task passed.
     */
    const TASK_PASSED = 'tasks.pass';

    /**
     * Emitted when task failed.
     */
    const TASK_FAILED = 'tasks.failed';

    private function __construct()
    {
    }
}