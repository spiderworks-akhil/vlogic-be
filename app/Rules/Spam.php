<?php
namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Spam implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {

        $spamKeywords = ['spam', 'junk', 'scam', 'fraud'];


        foreach ($spamKeywords as $keyword) {
            if (stripos($value, $keyword) !== false) {

                $fail("The $attribute contains spam content.");
                return;  
            }
        }
    }
}
