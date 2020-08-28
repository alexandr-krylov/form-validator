<?php

abstract class AbstractForm
{
    protected $fields = [];
    protected $validator;

    public function __construct(AbstractValidator $validator)
    {
        $this->validator = $validator;
    }

    public function addField(AbstractField $field)
    {
        $this->fields[$field->getName()] = $field;
    }

    public function validate(): bool
    {
        return $this->validator->validate($this->getFields());
    }

    /**
     * @param $fieldName
     * @return AbstractField
     * @throws Exception
     */
    public function getField($fieldName): AbstractField
    {
        if (key_exists($fieldName, $this->fields)) return $this->fields[$fieldName];
        throw new Exception( $fieldName . ' field does not exist');
    }

    public function getFields(): array
    {
        return $this->fields;
    }
}
