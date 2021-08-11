<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Http\Resources\CompanyResource;

class CompanyController extends Controller
{


    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function getUserCompany()
    {
        return CompanyResource::collection(Company::where('user_id',auth()->user()->id)->get());

    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function createNewCompany(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'phone' => 'required',
        ]);

        $author = Company::create(array_merge(
            $request->all(),
            ['user_id' => auth()->user()->id]
        ));

           return response()->json([
            'message' => 'successfully added company',
            'data' => $author
        ], 201);

    }

}
