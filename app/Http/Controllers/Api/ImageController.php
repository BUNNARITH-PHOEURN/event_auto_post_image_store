<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageController extends Controller
{
   public function uploadImage(Request $request)
{
    $imageData = $request->image;

    if (!$imageData) {
        return response()->json([
            'success' => false,
            'message' => 'No image provided'
        ], 400);
    }

    // Check if base64 has prefix
    if (str_contains($imageData, ',')) {
        $imageParts = explode(',', $imageData);
        $imageBase64 = $imageParts[1];
    } else {
        // already pure base64
        $imageBase64 = $imageData;
    }

    // Decode safely
    $fileData = base64_decode($imageBase64);

    if ($fileData === false) {
        return response()->json([
            'success' => false,
            'message' => 'Invalid base64 string'
        ], 400);
    }

    $fileName = uniqid() . '.png';

    $filePath = storage_path('app/public/'. $fileName);
    file_put_contents($filePath, $fileData);

    return response()->json([
        'success' => true,
        'message' => 'Image uploaded successfully',
        'file_name' => $fileName,
        'url' => asset('storage/app/' . $fileName)
    ]);
}
    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $filename = time() . '_' . $file->getClientOriginalName();

            $path = $file->storeAs(
                'uploads/images',
                $filename,
                'public'
            );
            dd([
                'success' => true,
                'message' => 'Image uploaded successfully',
                'path' => $path,
                'url' => asset('storage/'.$path),
            ]);
            return response()->json([
                'success' => true,
                'message' => 'Image uploaded successfully',
                'path' => $path,
                'url' => asset('storage/'.$path),
            ]);
        }
        return response()->json([
            'success' => false,
            'message' => 'No image uploaded'
        ], 400);
    }
}