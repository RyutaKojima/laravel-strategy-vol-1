<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\CreateCustomerRequest;
use App\Http\Resources\CreateCustomerResource;
use App\UseCases\Customer\CreateCustomer\CreateCustomerParameter;
use App\UseCases\Customer\CreateCustomer\CreateCustomerUseCase;
use DB;
use Throwable;

final class CreateCustomerController extends Controller
{
    public function __construct(
        private readonly CreateCustomerUseCase $createCustomerUseCase,
    ) {
    }

    /**
     * @throws Throwable
     */
    public function __invoke(
        CreateCustomerRequest $request
    ): CreateCustomerResource {
        $param = new CreateCustomerParameter($request->validated());

        $customer = DB::transaction(
            fn() => $this->createCustomerUseCase->handle($param)
        );

        // create log を取る

        return new CreateCustomerResource($customer);
    }
}
