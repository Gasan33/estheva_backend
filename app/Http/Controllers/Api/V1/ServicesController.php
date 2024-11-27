<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\ServicesResource;
use App\Models\Category;
use App\Models\Service;
use App\Services\ApiResponse;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::with('category')->get();

        return api()->success(ServicesResource::collection($services));
    }

    public function show($id)
    {

        $service = Service::with('category')->findOrFail($id);


        return api()->success(new ServicesResource($service));
    }

    public function store(Request $request)
    {
        // $category = Category::where('id', $request->sku_id)->first();

        $service = Service::create([
            'service_name' => $request->service_name,
            'service_description' => $request->service_description,
            'service_price' => $request->service_price,
            'service_images' => $request->service_images,
            'service_video' => $request->service_video,
            'service_benefits' => $request->service_benefits,
            'service_rating' => $request->service_rating,
            'service_reviews' => $request->service_reviews,
            'service_sale_tag' => $request->service_sale_tag,
            'category_id' => 107,
        ]);

        $service_images = '';
        foreach ($request->service_images as $service_image) {
            $service_images .= ',' . $service_image;
        }
        $service->service_images = $service_images;


        // $service_images = [];
        // $getImage = $request->file('service_images')->store('storage/services');
        // array_push($service_images, $service->image()->create(['path' => $getImage]));

        // // dd($service_images);
        // $service->service_images = $service_images;
        // dd($service->service_images);



        // $getImage = $request->file('image')->store('storage/categories');
        // $category->image()->create(['path' => $getImage]);


        return api()->created();
    }
}

if (!function_exists('api')) {

    function api()
    {
        return new ApiResponse();
    }
}
