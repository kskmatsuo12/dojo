
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreatePushMessageToUsersTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("push_message_to_users", function (Blueprint $table) {

						$table->increments('id');
						$table->integer('toggle')->nullable();
						$table->integer('user_id')->nullable();
						$table->integer('room_id')->nullable();
						$table->integer('client_id')->nullable();
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
                Schema::dropIfExists("push_message_to_users");
            }
        }
    