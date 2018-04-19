<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblMemberDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_member_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('memberShipid');
            $table->integer('a_no');
            $table->string('m_name');
            $table->string('dob1');
            $table->string('c_name');
            $table->string('dob2');
            $table->string('firstNomineeName');
            $table->date('firstNDob');
            $table->string('secondNomineeName');
            $table->date('secondNDob');
            $table->string('thirdNomineeName');
            $table->date('thirdNDob');
            $table->string('address');
            $table->string('city');
            $table->integer('pin');
            $table->integer('mob1');
            $table->integer('mob2');
            $table->string('r_no');
            $table->string('email')->unquie();
            $table->string('password');
            $table->string('hash_password');
            $table->string('doj');
            $table->integer('tenure');
            $table->string('vdate');
            $table->string('ctype');
            $table->string('apartment');
            $table->integer('occupancy');
            $table->string('days');
            $table->string('nominee');
            $table->integer('purchase_amount');
            $table->integer('admin_amount');
            $table->integer('total_amount');
            $table->integer('initial_payment');
            $table->integer('mode_of_payment');
            $table->string('mode_of_payment_details');
            $table->integer('bal');
            $table->string('bal_payment');
            $table->integer('no_of_emi');
            $table->integer('emi_amount');
            $table->date('emi_start_date');
            $table->integer('amc');
            $table->string('excutive_name');
            $table->string('manager_name');
            $table->integer('dsa_id');
            $table->string('dsa_name');
            $table->string('member_offer');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * (`id`, `memberShipid`, `a_no`, `m_name`, `dob1`, `c_name`, `dob2`, `firstNomineeName`, `firstNDob`, `secondNomineeName`, `secondNDob`, `thirdNomineeName`, `thirdNDob`, `address`, `city`, `pin`, `mob1`, `mob2`, `r_no`, `email`, `password`, `hash_password`, `doj`, `tenure`, `vdate`, `ctype`, `apartment`, `occupancy`, `days`, `nominee`, `purchase_amount`, `admin_amount`, `total_amount`, `initial_payment`, `mode_of_payment`, `mode_of_payment_details`, `bal`, `bal_payment`, `no_of_emi`, `emi_amount`, `emi_start_date`, `amc`, `excutive_name`, `manager_name`, `dsa_id`, `dsa_name`, `member_offer`, `status`)
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_member_datas');
    }
}
