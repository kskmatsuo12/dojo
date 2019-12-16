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
            $table->integer('client_id');
            $table->string('recruit_advisor', 100);
            $table->string('consultation', 1000);
            $table->string('request_fill_out', 1000);
            $table->integer('request_number');
            $table->integer('work_term');
            $table->integer('money');
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
