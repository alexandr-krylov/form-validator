<?php

abstract class AbstractValidator
{

    /**
     * @param array $fields
     * @return bool
     */
    abstract public function validate(array $fields): bool;

}
