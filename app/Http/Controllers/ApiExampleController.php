<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Inspiring;
use Illuminate\Http\Request;


/**
 * @OA\Get(
 * path="/api/quote",
 * summary="Get a randome quote",
 * operationId="randomQuote",
 * tags={"examples"},
 * @OA\Response(
 *    response=200,
 *    description="Get a nice quote",
 *    @OA\JsonContent(
 *       @OA\Property(property="data", type="string", example="Simplicity is the ultimate sophistication.")
 *        )
 *     )
 * )
 */
class ApiExampleController extends Controller
{
    public function getRandomQuote() {
        return response()->json(['data' => Inspiring::quote()], 200);
    }
}
