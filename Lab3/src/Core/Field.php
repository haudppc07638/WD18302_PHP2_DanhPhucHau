<?php

namespace App\Core;

class Field
{
    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_NUMBER = 'number';

    public string $type;
    public string $attribute;

    public function __construct(string $attribute)
    {
        $this->type = self::TYPE_TEXT;
        $this->attribute = $attribute;
    }

    public function __toString()
    {
        return sprintf(
            '<div class="form-group">
                <label>%s</label>
                <input type="%s" name="%s">
            </div>',
            $this->getLabel($this->attribute),
            $this->type,
            $this->attribute
        );
    }


    public function passwordField()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }

    public function labels(): array
    {
        return [
            'firstname' => 'First Name',
            'lastname' => 'Last Name',
            'email' => 'Your Email',
            'password' => 'Password',
            'confirmPassword' => 'Confirm password',
        ];
    }

    public function getLabel($attribute)
    {
        return $this->labels()[$attribute] ?? $attribute;
    }

}
