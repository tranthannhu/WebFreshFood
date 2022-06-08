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
     *     description="This is a sample Userstore server.",
     *     version="1.0.0",
     *     title="This is title",
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
     * @OA\Tag(
     *     name="auth",
     *     description="Operations about auth user",
     *     @OA\ExternalDocumentation(
     *         description="Find out more about store",
     *         url="http://swagger.io"
     *     )
     * )
     * * @OA\Tag(
     *     name="Admin",
     *     description="Operations about Admin",
     *     @OA\ExternalDocumentation(
     *         description="Find out more about store",
     *         url="http://swagger.io"
     *     )
     * )
     * @OA\Tag(
     *     name="user",
     *     description="Operations about user",
     *     @OA\ExternalDocumentation(
     *         description="Find out more about store",
     *         url="http://swagger.io"
     *     )
     * )
     */
     /**
     * @OA\Get(
     *     path="/users",
     *     tags={"user"},
     *     summary="Get list user",
     *     description="Returns a single new user.",
     *     operationId="getListUser",
     *     @OA\Parameter(
     *         name="name",
     *         in="query",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *          response=200,
     *          description="successful operation",
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(
     *                  property="data",
     *                  type="array",
     *                  @OA\Items(
     *                      type="object",
     *                      example={
     *                          "id": 1,
     *                          "name": "ManhDan",
     *                          "email": "danhuynh660@gmail.com",
     *                      },
     *                  )
     *              ),
     *              @OA\Property(
     *                  property="links",
     *                  type="object",
     *                  example={
     *                      "first": "http://127.0.0.1:8000/api/users?page=1",
     *                      "last": "http://127.0.0.1:8000/api/users?page=1",
     *                      "prev": null,
     *                      "next": null,
     *                  },
     *              ),
     *               @OA\Property(
     *                  property="meta",
     *                  type="object",
     *                  @OA\Property(
     *                      property="current_page",
     *                      type="integer",
     *                      example=1
     *                  ),
     *                  @OA\Property(
     *                      property="from",
     *                      type="integer",
     *                      example=1
     *                  ),
     *                  @OA\Property(
     *                      property="last_page",
     *                      type="integer",
     *                      example=1
     *                  ),
     *                  @OA\Property(
     *                      property="links",
     *                      type="array",
     *                      @OA\Items(
     *                          type="object",
     *                          example={
     *                              "url": "http://127.0.0.1:8000/api/users?page=1",
     *                              "label": "http://127.0.0.1:8000/api/users?page=1",
     *                              "active": null,
     *                          },
     *                      )
     *                  ),
     *                  @OA\Property(
     *                      property="path",
     *                      type="string",
     *                      example="http://127.0.0.1:8000/api/users"
     *                  ),
     *                  @OA\Property(
     *                      property="per_page",
     *                      type="integer",
     *                      example=10
     *                  ),
     *                  @OA\Property(
     *                      property="to",
     *                      type="integer",
     *                      example=10
     *                  ),
     *                  @OA\Property(
     *                      property="total",
     *                      type="integer",
     *                      example=10
     *                  ),
     *              ),
     *          )
     *      ),
     * )
     */
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
