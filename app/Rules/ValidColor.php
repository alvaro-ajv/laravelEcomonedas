<?php

namespace App\Rules;
use App\Material;

use Illuminate\Contracts\Validation\Rule;

class ValidColor implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
      $material = Material::where('color',$value)->get();

      if(count($material)>=1){
        return false;
      }
      return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'El color ya esta utilizado por otro material';
    }
}
