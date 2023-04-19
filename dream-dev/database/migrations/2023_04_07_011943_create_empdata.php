<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('empData', function (Blueprint $table) {
            $table->string('empId',10);
            $table->string('empUserName',200);
            $table->string('empPass',200);
            $table->string('empFirstName',200);
            $table->string('empLastName',200)->nullable();
            $table->date('empDOB');
            $table->string('empGender',10);
            $table->string('empEmail',200);
            $table->string('empContact',200);
            $table->string('QualifyDropdown',200);
            $table->string('ExpDropdown',200);
            $table->string('empPhonecode',10)->nullable();
            $table->string('empCountry',200);
            $table->string('empState',200);
            $table->string('empCity',200);
            $table->string('empAddress',200)->nullable();
            $table->string('empZipCode',10)->nullable();
            $table->string('resetToken',10)->nullable();
            $table->string('expiryTime',10)->nullable();
            $table->primary('empId');
            $table->unique('empUserName');
            $table->unique('empEmail');
            $table->unique('empContact');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empData');
    }
};
