<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Files;
use Illuminate\Support\Facades\Storage;
use OpenApi\Annotations as OA;

/**
 * @OA\SecurityRequirement(name="ApiKeyAuth")
 *
 * @OA\Server(
 *     url=L5_SWAGGER_CONST_HOST,
 *     description="Server Lokal"
 * )
 */
class FileController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/upload",
     *     tags={"Files"},
     *     summary="Upload a file",
     *     security={{"ApiKeyAuth": {}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 required={"file", "name"},
     *                 @OA\Property(property="name", type="string", description="Name of the file"),
     *                 @OA\Property(property="file", type="string", format="binary", description="File to upload")
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="File uploaded successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="File uploaded successfully"),
     *             @OA\Property(property="filename", type="string", example="1721531741_document.pdf"),
     *             @OA\Property(property="type", type="string", example="application/pdf"),
     *             @OA\Property(property="size", type="integer", example=204800),
     *             @OA\Property(property="name", type="string", example="Invoice July")
     *         )
     *     ),
     *     @OA\Response(response=400, description="Invalid upload request")
     * )
     */
    public function upload(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'file' => 'required|file'
        ]);

        $file = $request->file('file');
        $filename = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('files', $filename, 'public');

        $fileRecord = Files::create([
            'name' => $request->input('name'),
            'path' => $path,
            'type' => $file->getMimeType(),
            'size' => $file->getSize(),
        ]);

        return response()->json([
            'message' => 'File uploaded successfully',
            'filename' => $filename,
            'type' => $file->getMimeType(),
            'size' => $file->getSize(),
            'name' => $request->input('name')
        ]);
    }

    /**
     * @OA\Get(
     *     path="/api/files",
     *     tags={"Files"},
     *     summary="List all uploaded files",
     *     security={{"ApiKeyAuth": {}}},
     *     @OA\Response(
     *         response=200,
     *         description="List of files",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/File")
     *         )
     *     )
     * )
     */
    public function list()
    {
        $data = Files::get();

        return response()->json([
            'message' => 'success',
            'data' => $data,
        ]);
    }

    /**
     * @OA\Post(
     *     path="/api/update/{id}",
     *     tags={"Files"},
     *     summary="Update a file by ID",
     *     security={{"ApiKeyAuth": {}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=false,
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 @OA\Property(property="name", type="string"),
     *                 @OA\Property(property="file", type="string", format="binary")
     *             )
     *         )
     *     ),
     *     @OA\Response(response=200, description="File updated successfully"),
     *     @OA\Response(response=404, description="File not found")
     * )
     */
    public function update(Request $request, $id)
    {
        $file = Files::find($id);

        if (!$file) {
            return response()->json(['message' => 'File not found'], 404);
        }

        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'file' => 'sometimes|file|max:2048',
        ]);

        if (isset($validated['name'])) {
            $file->name = $validated['name'];
        }

        if ($request->hasFile('file')) {
            $uploadedFile = $request->file('file');
            $path = $uploadedFile->store('files', 'public');

            $file->path = $path;
            $file->type = $uploadedFile->getMimeType();
            $file->size = $uploadedFile->getSize();
        }

        $file->save();

        return response()->json([
            'message' => 'File updated successfully',
            'data' => $file->fresh(),
        ]);
    }

    /**
     * @OA\Delete(
     *     path="/api/upload/{id}",
     *     tags={"Files"},
     *     summary="Delete a file by ID",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=200, description="File deleted successfully"),
     *     @OA\Response(response=404, description="File not found")
     * )
     */
    public function delete($id)
    {
        $file = Files::find($id);

        if (!$file) {
            return response()->json(['message' => 'File not found'], 404);
        }

        $file->delete();

        return response()->json(['message' => 'File deleted successfully']);
    }

}

