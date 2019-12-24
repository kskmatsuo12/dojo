
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateClientsTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("clients", function (Blueprint $table) {

						$table->increments('id');
						$table->string('client_name',30)->nullable();
						$table->string('client_kana',30)->nullable();
						$table->string('client_loginid',20)->nullable();
						$table->string('client_pass',20)->nullable();
						$table->string('client_loc',20)->nullable();
						$table->text('client_url')->nullable();
						$table->string('client_biz',5000)->nullable();
						$table->integer('client_num_emp')->nullable();
						$table->string('client_matter',5000)->nullable();
						$table->timestamps();
                        $table->softDeletes();
                        $table->rememberToken();

                });
            }

            /**
             * Reverse the migrations.
             *
             * @return void
             */
            public function down()
            {
                Schema::dropIfExists("clients");
            }
        }
    