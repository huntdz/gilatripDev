<?php

namespace Botble\Member\Http\Requests;

use Botble\Support\Http\Requests\Request;

class MemberRequest extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     * @author Sang Nguyen
     */
    public function rules()
    {
        return [
            'name' => 'required',
        ];
    }
}
