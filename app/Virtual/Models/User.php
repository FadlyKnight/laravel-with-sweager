<?php

/**
 * @OA\Schema(
 *     title="User",
 *     description="User model",
 *     @OA\Xml(
 *         name="User"
 *     )
 * )
 */
class User
{

    /**
     * @OA\Property(
     *     title="ID",
     *     description="ID",
     *     format="int64",
     *     example=1
     * )
     *
     * @var integer
     */
    private $id;

    /**
     * @OA\Property(
     *      title="Name",
     *      description="Name of User",
     *      example="Mr Lee"
     * )
     *
     * @var string
     */
    public $name;

    /**
     * @OA\Property(
     *      title="Email",
     *      description="Email of User",
     *      example="email123"
     * )
     *
     * @var string
     */
    public $email;

    /**
     * @OA\Property(
     *      title="role",
     *      description="role of User",
     *      example="Senior HRD"
     * )
     *
     * @var string
     */
    public $role;
    
}