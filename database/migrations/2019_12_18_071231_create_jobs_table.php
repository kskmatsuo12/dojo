
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateJobsTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("jobs", function (Blueprint $table) {

						$table->increments('id');
						$table->string('job_title',30)->nullable();
						$table->string('job_text',3000)->nullable();
						$table->string('recruit_advisor',100)->nullable();
						$table->string('consultation',3000)->nullable();
						$table->string('request_fill_out',3000)->nullable();
						$table->string('work_format',30)->nullable();
						$table->string('work_term',30)->nullable();
						$table->string('interview_format',30)->nullable();
						$table->string('interview_place',30)->nullable();
						$table->integer('request_number')->nullable();
						$table->date('recruitment_term')->nullable();
						$table->string('responsible_party',30)->nullable();
						$table->string('responsible_email',30)->nullable();
						$table->string('get_skill',100)->nullable();
						$table->integer('client_id')->nullable();
						$table->integer('job_status')->nullable();
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
                Schema::dropIfExists("jobs");
            }
        }
    