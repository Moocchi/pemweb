<?php

namespace App\OpenApi\Schemas;

/**
 * @OA\Schema(
 *     schema="File",
 *     title="File",
 *     description="Schema untuk data file",
 *     type="object",
 *     required={"id", "name", "path", "type", "size"},
 *
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="name", type="string", example="My File.pdf"),
 *     @OA\Property(property="path", type="string", example="files/1721531741_document.pdf"),
 *     @OA\Property(property="type", type="string", example="application/pdf"),
 *     @OA\Property(property="size", type="integer", example=204800),
 *     @OA\Property(property="created_at", type="string", format="date-time", example="2024-07-21T10:00:00Z"),
 *     @OA\Property(property="updated_at", type="string", format="date-time", example="2024-07-21T10:01:00Z")
 * )
 */
class File {}
