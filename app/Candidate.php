<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * @OA\Schema(
 *     title="Candidate",
 *     description="Candidate model",
 *     @OA\Xml(
 *         name="Candidate"
 *     )
 * )
 */
class Candidate extends Model
{
    /**
     * 
     * @OA\Property(
     *    property="id",
     *    type="number",
     *    example=""
     * ),
     * @OA\Property(
     *    property="creator_id",
     *    type="number",
     *    example=""
     * ),
     * @OA\Property(
     *    property="name",
     *    type="string",
     *    example=""
     * ),
     * @OA\Property(
     *    property="education",
     *    type="string",
     *    example=""
     * ),
     * @OA\Property(
     *    property="birthday",
     *    type="date",
     *    example=""
     * ),
     * @OA\Property(
     *    property="experience",
     *    type="string",
     *    example=""
     * ),
     * @OA\Property(
     *    property="last_position",
     *    type="string",
     *    example=""
     * ),
     * @OA\Property(
     *    property="applied",
     *    type="string",
     *    example=""
     * ),
     * @OA\Property(
     *    property="top_skill",
     *    type="string",
     *    example=""
     * ),
     * @OA\Property(
     *    property="email",
     *    type="string",
     *    example=""
     * ),
     * @OA\Property(
     *    property="phone",
     *    type="string",
     *    example=""
     * ),
     * @OA\Property(
     *    property="resume",
     *    type="string",
     *    example=""
     * ),
     * @OA\Property(
     *    property="created_at",
     *    type="date",
     *    example=""
     * ),
     * @OA\Property(
     *    property="updated_at",
     *    type="date",
     *    example=""
     * ),
     */
    protected $fillable = [
        'creator_id',
        'name',
        'education',
        'birthday',
        'experience',
        'last_position',
        'applied',
        'top_skill',
        'email',
        'phone',
        'resume'
    ];

    public function creator(){
        return $this->belongsTo(User::class, 'creator_id','id');
    }

}
