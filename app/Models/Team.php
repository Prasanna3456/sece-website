<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'team_id',
        'name',
        'email',
        'whatsapp_number',
        'institution_name',
        'course',
        'department',
        'year_section',
        'fifa_event',
        'project_based_event',
        'project_title',
        'project_abstract',
        'status',
        'razorpay_order_id',
        'team_present',
        'college_id_card'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class,'event_id','id');
    }

    public function members()
    {
        return $this->hasMany(TeamMember::class,'team_id');
    }
}
