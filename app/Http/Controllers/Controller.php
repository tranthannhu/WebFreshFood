<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    /**
     * @license Apache 2.0
     */

    /**
     * @OA\Info(
     *     description="This is a sample Userstore server.  You can find out more about Swagger at [http://swagger.io](http://swagger.io) or on [irc.freenode.net, #swagger](http://swagger.io/irc/).",
     *     version="1.0.0",
     *     title="Swagger ManhDanBlogs",
     *     termsOfService="http://swagger.io/terms/",
     *     @OA\Contact(
     *         email="apiteam@swagger.io"
     *     ),
     *     @OA\License(
     *         name="Apache 2.0",
     *         url="http://www.apache.org/licenses/LICENSE-2.0.html"
     *     )
     * )
     *  @OA\Server(
     *      url="http://127.0.0.1:8000/api/",
     *      description="Development Environment"
     *  )
     *
     * @OA\Tag(
     *     name="Auth",
     *     description="Auth API",
     * )
     * @OA\Tag(
     *     name="Admin",
     *     description="Admin api",
     * )
     * @OA\Tag(
     *     name="User",
     *     description="User Api",
     * )
     */
    
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
}
