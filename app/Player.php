<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Player
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Player newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Player newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Player query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property int $answers
 * @property int $points
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Player whereAnswers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Player whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Player whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Player whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Player wherePoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Player whereUpdatedAt($value)
 */
class Player extends Model
{
    protected $fillable = ['name', 'answers', 'points'];
}
