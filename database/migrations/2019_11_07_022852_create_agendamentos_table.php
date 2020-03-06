<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateAgendamentosTable.
 */
class CreateAgendamentosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agendamentos', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('speciality_id');
            $table->unsignedBigInteger('professional_id');
            $table->string('name');
            $table->string('cpf', 11);
            $table->unsignedBigInteger('source_id');
            $table->date('birthdate');
            $table->date('date_time');

            $table->timestamps();
            $table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('agendamentos');
	}
}
