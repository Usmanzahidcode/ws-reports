<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BaseRequest extends FormRequest
{
    /// The base request that must be inherited by all the requests.
    /// used for common logic such as:
    /// 1. Unified response handling
    /// 2. Error handling at one place
}
