<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\FormBuilderResources;
use App\Models\FormTemplate;
use Illuminate\Validation\ValidationException;

class FormBuilderController extends Controller
{
    public function index()
    {
        return FormBuilderResources::collection(FormTemplate::all());
    }

    public function show(FormTemplate $formtemplate)
    {
        return $formtemplate;
    }
}
