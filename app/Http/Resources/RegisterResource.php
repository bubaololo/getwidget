<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RegisterResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'title' => __('register.title'),
            'placeholders' => [
                'name' => __('register.name'),
                'email' => __('register.email'),
                'password' => __('register.password'),
                'password_confirm' => __('register.password_confirm'),
            ],
            'reg_button' => __('register.reg_button'),
        ];
    }

    public function withResponse($request, $response)
    {   
        $response->setEncodingOptions(JSON_UNESCAPED_UNICODE);
    }
}
