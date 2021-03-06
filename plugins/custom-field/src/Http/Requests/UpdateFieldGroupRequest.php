<?php

namespace Botble\CustomField\Http\Requests;

use Botble\Support\Http\Requests\Request;

class UpdateFieldGroupRequest extends Request
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
            'field_group.order' => 'integer|min:0|required',
            'field_group.rules' => 'json|required',
            'field_group.group_items' => 'json|required',
            'field_group.deleted_items' => 'json|nullable',
            'field_group.title' => 'string|required|max:255',
            'field_group.status' => 'required',
        ];
    }
}
