
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateMessagesGroupsTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("messages_groups", function (Blueprint $table) {

						$table->increments('id');
						$table->string('group_message',1000)->nullable();
						$table->integer('group_messages_from')->nullable();
						$table->integer('group_message_which')->nullable();
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
                Schema::dropIfExists("messages_groups");
            }
        }
    