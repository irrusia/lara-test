<?php


namespace App\Services\ClientApplication;

use App\Models\ClientApplication;
use Illuminate\Support\Facades\Auth;

class Service
{
    public function store($data)
    {
        $newClientRequest = new ClientApplication();
        $newClientRequest->name = $data->input('name');
        $newClientRequest->phone = $data->input('phone');
        $newClientRequest->company = $data->input('company');
        $newClientRequest->title = $data->input('title');
        $newClientRequest->message = $data->input('message');
        if($data->hasFile('attachment')) {
            $file = $data->file('attachment')->store('applications');
            $newClientRequest->attachment = $file;
        }
        $newClientRequest->user_id = Auth::user()->id;
        $newClientRequest->save();
    }
}
