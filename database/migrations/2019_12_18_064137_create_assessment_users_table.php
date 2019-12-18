
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateAssessmentUsersTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("assessment_users", function (Blueprint $table) {

						$table->increments('id');
						$table->string('assessment_user_comment',5000)->nullable();
						$table->integer('take_point')->nullable();
						$table->integer('user_attitude')->nullable();
						$table->integer('user_contribution')->nullable();
						$table->string('user_worrying',5000)->nullable();
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
                Schema::dropIfExists("assessment_users");
            }
        }
    