<?php

namespace WorkerBundle\Workers;


interface WorkerInterface
{
    /**
     * Does the work
     *
     * @return NULL
     */
    public function work();
}