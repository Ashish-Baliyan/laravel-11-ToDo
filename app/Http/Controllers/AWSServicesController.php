<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AWSServicesController extends Controller
{

    public function index()
    {

        return view('aws-services.index');
    }
    public function uploadToS3(Request $request)
    {

        $file = $request->file('file');

        // Use the Storage facade to upload files to S3:
        $path = $file->store('simple-upload', 's3'); // Saves to S3 under the "uploads" directory

        // To get the URL of an uploaded file:
        $path = Storage::disk('s3')->put('uploads', $file);
        //If your S3 bucket is private and you need a temporary signed URL:
        $path = Storage::disk('s3')->temporaryUrl(
            'uploads/' . $file->hashName(),
            now()->addMinutes(1)
        );
        return response()->json([
            'message' => 'File uploaded to S3 successfully!',
            'path' => $path,
        ]);
    }
}
