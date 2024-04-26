<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ImageSizeRule implements Rule
{
    /**
     * @var int
     */
    private int $size;

    /**
     * Create a new rule instance.
     * @return void
     */
    public function __construct(int $size) {

        $this->size = $size;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     *
     * @return bool
     */
    public function passes($attribute, $value) {

        if (is_null($value)) {
            return TRUE;
        }
        if (!is_object($value)) {
            return FALSE;
        }

        return $value->getSize() <= ($this->size * 1024 * 1024);
    }

    /**
     * Get the validation error message.
     * @return string
     */
    public function message() {

        return __('Image must not exceed :size MB', ['size' => $this->size]);
    }
}
