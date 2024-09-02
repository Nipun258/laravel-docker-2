<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CommonController extends Controller
{
    public function getUserData()
    {
        try {
            // Replace with your API endpoint
            $apiUrl = 'http://10.32.192.56:8085/api/user/list';

            // Make an HTTP GET request to the API
            $response = Http::get($apiUrl);

            // Check if the request was successful
            if ($response->successful()) {
                // Get the data from the response
                $data = $response->json();

                // Process or return the data
                return view('common.user_list', ['users' => $data]);
            } else {
                // Handle error response
                return response()->json(['error' => 'Failed to fetch data'], $response->status());
            }
        } catch (\Exception $e) {
            // Handle exceptions
            return response()->json(['error' => 'An error occurred: ' . $e->getMessage()], 500);
        }
    }

    public function getCategoryData()
    {
        try {
            // Replace with your API endpoint
            $apiUrl = 'http://10.32.192.56:8085/api/category/list';

            // Make an HTTP GET request to the API
            $response = Http::get($apiUrl);

            // Check if the request was successful
            if ($response->successful()) {
                // Get the data from the response
                $data = $response->json();

                // Process or return the data
                return view('common.category_list', ['categories' => $data]);
            } else {
                // Handle error response
                return response()->json(['error' => 'Failed to fetch data'], $response->status());
            }
        } catch (\Exception $e) {
            // Handle exceptions
            return response()->json(['error' => 'An error occurred: ' . $e->getMessage()], 500);
        }
    }
}
