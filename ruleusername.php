<?php

class RuleUsername implements InterfaceRule
{
    public function check(...$args): bool
    {
        list($value) = $args;
        return 1 == preg_match("/^[a-zA-Z0-9][a-zA-Z0-9]*[a-zA-Z0-9]$/", $value);
    }
}