<?php
/*
 * This file is part of PHP-Task library.
 *
 * (c) php-task
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Task\FrequentTask;

use Cron\CronExpression;
use Task\TaskInterface;

/**
 * Run once a day, midnight.
 *
 * @author @wachterjohannes <johannes.wachter@massiveart.com>
 */
class DailyTask extends CronTask
{
    public function __construct(TaskInterface $task, \DateTime $start, \DateTime $end = null)
    {
        parent::__construct(CronExpression::factory('@daily'), $task, $start, $end);
    }
}
