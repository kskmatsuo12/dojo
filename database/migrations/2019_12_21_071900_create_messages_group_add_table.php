
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateMessagesGroupAddTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("messages_group_add", function (Blueprint $table) {

						$table->increments('id');
						$table->integer('group_id')->nullable();
						$table->integer('add_id')->nullable();
						$table->integer('which')->nullable();
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
                Schema::dropIfExists("messages_group_add");
            }
        }
    