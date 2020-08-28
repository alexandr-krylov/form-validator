<?php


class RulePassword implements InterfaceRule
{
    public function check(...$args): bool
    {
        list($value) = $args;
        return 1 == preg_match("((?=.*d)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[~!@#$%^&*()_+]).{6,20})", $value);
    }
}