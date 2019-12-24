
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateReportsTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("reports", function (Blueprint $table) {

						$table->increments('id');
						$table->integer('from_user_id')->nullable();
						$table->integer('to_user_id')->nullable();
						$table->integer('job_id')->nullable();
						$table->string('report_category',100)->nullable();
						$table->string('report_text',5000)->nullable();
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
                Schema::dropIfExists("reports");
            }
        }
    