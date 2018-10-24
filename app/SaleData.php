<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaleData extends Model
{
    protected $fillable=[
        'sessionName',
        'fy',
        'vouchars',
        'user_date',
        'Form_no',
        'status',
        'group_stu',
        'campus',
        'for_class',
        'stuname',
        'gender',
        'dob',
        'age','fn','mn','ref',
        'address','address1','address2','contactNumber',
        'smsNum','city','area','result','value',
        'pin','dist','state','preSch','rec_name',
        'rep_name','instru',
    ];
}
