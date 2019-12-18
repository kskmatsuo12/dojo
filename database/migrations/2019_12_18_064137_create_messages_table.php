
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateMessagesTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("messages", function (Blueprint $table) {

						$table->increments('id');
						$table->integer('room_id')->nullable();
						$table->string('message',1000)->nullable();
						$table->integer('message_from')->nullable();
						$table->integer('message_which')->nullable();
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
                Schema::dropIfExists("messages");
            }
        }
    