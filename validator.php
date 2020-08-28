<?php

class Validator extends AbstractValidator
{
    public function validate(array $fields): bool
    {
        // TODO: Implement validate() method.
        return (new RuleUsername())->check($fields['login']->getValue()) &&
            (new RulePassword())->check($fields['password']->getValue()) &&
            (new RuleConfirm())->check($fields['password']->getValue(), $fields['confirmpass']->getValue());
    }
}