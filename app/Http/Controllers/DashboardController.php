<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

    /**
     * @OA\Tag(
     *     name="Homepage",
     *     description="API Endpoints of Homepage"
     * ),
     * @OA\Get(
     *      path="/",
     *      operationId="getHomePage",
     *      tags={"Homepage"},
     *      summary="Go to Welcome Page",
     *      description="Welcome Page or Homepage",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *  )
     * @OA\Tag(
     *     name="Projects",
     *     description="API Endpoints of Projects"
     * ),
     * @OA\Get(
     *      path="/dashboard",
     *      operationId="getProjectsList",
     *      tags={"Projects"},
     *      summary="Get list of projects",
     *      description="Returns list of projects",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *  )
     */

class DashboardController extends ApiController
{

    public function index(Request $request)
    {
        return response()->json([
            'result'    => [
                'statistics' => [
                    'users' => [
                        'name'  => 'Name',
                        'email' => 'user@example.com'
                    ]
                ],
            ],
            'message'   => '',
            'type'      => 'success',
            'status'    => 0
        ]);

    }
}
