<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddressRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\View\View;
use App\Models\Address;
use App\Http\Requests\ProductImageRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;

class AddressController extends Controller
{
    public function __construct()
    {
        //dd(request()->all());
        $this->returnUrl = "/users/{}/addresses";

    }
    /**
     * Display a listing of the resource.
     *
     * @return View

     */
    public function index(User $user): View
    {

        $addrs = $user->addrs;
        return view("backend.addresses.index", ["addrs" => $addrs, "user" => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View

     */
    public function create(User $user): View
    {

        return view("backend.addresses.insert_form", ["user" => $user]);
    }

    /**
     * Store a newly created resource in storage.
     * @param User $user
     * @param ProductImageRequest $request
     * @return RedirectResponse
     */
    public function store(AddressRequest $request, User $user):RedirectResponse
    {
//        dd(1);
        $addr = new Address();
        $data = $this->prepare($request, $addr->getFillable());
        $addr->fill($data);
        $addr->save();

        $this->editReturnUrl($user->user_id);

        return Redirect::to($this->returnUrl);
    }

    private function editReturnUrl($id)
    {
        $this->returnUrl = "/users/$id/addresses";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param User $user
     * @param Address $address
     * @return View
     */
    public function edit(User $user, Address $address): View
    {
        return view("backend.addresses.update_form", ["user" => $user, "addr" => $address]);
    }


    /**
     * Update the specified resource in storage.
     * @param ProductImageRequest $request
     * @param User $user
     * @param Address $address
     * @return RedirectResponse
     */

    public function update(AddressRequest $request, User $user, Address $address)
    {
        $data = $this->prepare($request, $address->getFillable());
        $address->fill($data);
        $address->save();

        $this->editReturnUrl($user->user_id);

        return Redirect::to($this->returnUrl);
    }

    /**
     * Remove the specified resource from storage.
     * @param Address $address
     * @return JsonResponse
     */
    public function destroy(User $user, Address $address): JsonResponse
    {
        $address->delete();
        return response()->json(["message" => "Done", "id" => $address->address_id]);
    }
}
