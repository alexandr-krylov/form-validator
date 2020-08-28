<?php

class RuleConfirm implements InterfaceRule
{
    public function check(...$args): bool
    {
        list($value, $confirmation) = $args;
        return $value == $confirmation;
    }
}
