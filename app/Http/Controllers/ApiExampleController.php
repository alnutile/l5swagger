<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Inspiring;
use Illuminate\Http\Request;



class ApiExampleController extends Controller
{


    /**
     * @OA\Get(
     * path="/api/quote",
     * summary="Get a random quote",
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
    public function getRandomQuote() {
        return response()->json(['data' => str(Inspiring::quote())->stripTags()->toString()], 200);
    }

    /**
     * @OA\Get(
     *     path="/api/quotes",
     *     summary="Get all quotes",
     *     operationId="randomQuotes",
     *     tags={"examples"},
     *     @OA\Response(
     *         response=200,
     *         description="Get all quotes",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 property="data",
     *                 type="array",
     *                 @OA\Items(type="string"),
     *                 example="Simplicity is the ultimate sophistication."
     *             )
     *         )
     *     )
     * )
     */
    public function getAllQuotes() {
        return response()->json(['data' => Inspiring::quotes()->toArray()], 200);
    }
}
