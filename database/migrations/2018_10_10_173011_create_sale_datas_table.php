<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaleDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_datas', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('sessionName')->default(2);
            $table->date('fy');
            $table->string('vouchars');
            $table->date('user_date');
            $table->integer('Form_no');
            $table->string('status');
            $table->string('group_stu');
            $table->string('campus');
            $table->string('for_class');
            //till now Prospectus details
            $table->string('stuname')->default('vijay');
            $table->string('gender')->default('male');
            $table->date('dob');
            $table->integer('age');
            $table->string('fn');
            $table->string('mn');
            $table->string('ref');
            //till now student details
            $table->string('address');
            $table->string('address1');
            $table->string('address2');
            $table->bigInteger('contactNumber');
            $table->bigInteger('smsNum');
            $table->string('city');
            $table->string('area');
            $table->string('result');
            $table->string('value');
            $table->integer('pin');
            $table->string('dist');
            $table->string('state');
            $table->string('preSch');
            // till now Adress details
            $table->string('rec_name');
            $table->string('rep_name');
            $table->text('instru');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sale_datas');
    }
}
