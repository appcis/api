<?php
/* 
 * Migrations generated by: Skipper (http://www.skipper18.com)
 * Migration id: 75e26f14-7cb9-4d58-94b9-718df3f38291
 * Migration datetime: 2019-11-25 17:42:55.467477
 */ 

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SkipperMigrations2019112517425546 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->unsigned();
            $table->string('nom', 50)->nullable(true);
            $table->string('prenom', 50)->nullable(true);
            $table->bigInteger('grade_id')->nullable(true)->unsigned();
            $table->boolean('statut')->nullable(true);
            $table->string('telephone', 15)->nullable(true);
            $table->timestamp('created_at')->nullable(true);
            $table->timestamp('updated_at')->nullable(true);
        });
        Schema::create('grades', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->unsigned();
            $table->string('lib_court', 10)->nullable(true);
            $table->string('lib_long', 50)->nullable(true);
            $table->string('img_path', 100)->nullable(true);
            $table->integer('ordre')->nullable(true);
            $table->timestamp('created_at')->nullable(true);
            $table->timestamp('updated_at')->nullable(true);
        });
        Schema::create('sms', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->unsigned();
            $table->string('titre')->nullable(true);
            $table->text('contenu')->nullable(true);
            $table->timestamp('created_at')->nullable(true);
            $table->timestamp('updated_at')->nullable(true);
        });
        Schema::create('agent_sms', function (Blueprint $table) {
            $table->bigInteger('agent_id')->unsigned();
            $table->bigInteger('sms_id')->unsigned();
            $table->boolean('auteur')->nullable(true)->default(False);
            $table->primary(['agent_id','sms_id']);
        });
        Schema::create('groupes', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->unsigned();
            $table->string('libelle')->nullable(true);
            $table->text('description')->nullable(true);
            $table->timestamp('created_at')->nullable(true);
            $table->timestamp('updated_at')->nullable(true);
        });
        Schema::create('agent_groupe', function (Blueprint $table) {
            $table->bigInteger('groupe_id')->unsigned();
            $table->bigInteger('agent_id')->unsigned();
            $table->primary(['groupe_id','agent_id']);
        });
        Schema::table('agents', function (Blueprint $table) {
            $table->foreign('grade_id')->references('id')->on('grades');
        });
        Schema::table('agent_sms', function (Blueprint $table) {
            $table->foreign('sms_id')->references('id')->on('sms');
            $table->foreign('agent_id')->references('id')->on('agents');
        });
        Schema::table('agent_groupe', function (Blueprint $table) {
            $table->foreign('groupe_id')->references('id')->on('groupes');
            $table->foreign('agent_id')->references('id')->on('agents');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('agent_groupe', function (Blueprint $table) {
            $table->dropForeign('groupe_id');
            $table->dropForeign('agent_id');
        });
        Schema::table('agent_sms', function (Blueprint $table) {
            $table->dropForeign('sms_id');
            $table->dropForeign('agent_id');
        });
        if (Schema::hasTable('agents')) {
            Schema::table('agents', function (Blueprint $table) {
                $table->dropForeign(['grade_id']);
            });
        }
        Schema::dropIfExists('agent_groupe');
        Schema::dropIfExists('groupes');
        Schema::dropIfExists('agent_sms');
        Schema::dropIfExists('sms');
        Schema::dropIfExists('grades');
        Schema::dropIfExists('agents');
    }
}