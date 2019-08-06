<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use app\Company;

class CreateCompaniesTable extends Migration
{

    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone');
            $table->timestamps();
        });

        /*companyCreate('Company A', '999-99-99-999');
        companyCreate('Company B', '333-33-33-333');
        companyCreate('Company C', '222-22-22-222');
        companyCreate('Company D', '111-11-11-111');*/
    }

    /*private function companyCreate($name, $phone)  {
        $company = new Company();
        $company->setAttribute('name', $name);
        $company->setAttribute('phone', $phone);
        $company->save();
    }*/

    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
