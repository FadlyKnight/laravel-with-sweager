<?php


/**
 * @OA\Schema(
 *     title="LoginResponseResource",
 *     description="Login Response Resource",
 *     @OA\Xml(
 *         name="LoginResponseResource"
 *     )
 * )
 */

class LoginResponseResource {
    /*
    *  @OA\Property(
    *      property="token", 
    *      type="string", 
    *      example="eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9."
    * )
    *  
    *  @var string
    * 
    */
    private $token;

    /*
     *  @OA\Property(property="message", type="string", example="success login"),
     *  
     *  @var string
    */
    private $message;
    
    /**
     * @OA\Property(
     *     property="user"
     *     title="User",
     *     description="User wrapper"
     * )
     *
     * @var \App\Virtual\Models\User[]
     */
    private $User; 

}

    
    // /**
    //  * @OA\Property(
    //  *      title="Author ID",
    //  *      description="Author's id of the new User",
    //  *      format="int64",
    //  *      example=1
    //  * )
    //  *
    //  * @var integer
    //  */
    // public $author_id;


    // /**
    //  * @OA\Property(
    //  *     title="Author",
    //  *     description="User author's user model"
    //  * )
    //  *
    //  * @var \App\Virtual\Models\User
    //  */
    // private $author;
