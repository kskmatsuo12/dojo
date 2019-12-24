
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateAssessmentClientsTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("assessment_clients", function (Blueprint $table) {

						$table->increments('id');
						$table->string('assessment_client_comment',5000)->nullable();
						$table->integer('client_level')->nullable();
						$table->integer('client_welcome')->nullable();
						$table->integer('client_contact')->nullable();
						$table->string('client_worrying',5000)->nullable();
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
                Schema::dropIfExists("assessment_clients");
            }
        }
    