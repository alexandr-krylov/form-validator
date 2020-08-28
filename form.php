<?php

class Form extends AbstractForm
{
    public function __construct(AbstractValidator $validator)
    {
        $this->addField(new FieldLogin());
        $this->addField(new FieldPassword());
        $this->addField(new FieldConfirmPass());
        parent::__construct($validator);
    }
}