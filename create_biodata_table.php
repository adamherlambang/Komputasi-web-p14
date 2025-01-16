<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodatas');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint; 
use Illuminate\Support\Facades\Schema;

class CreateBiodatasTable extends Migration
{
   public function up()
   {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->string('first name');
            $table->string('last name');
            $table->enum ('gender', ['male', 'female']);
            $table->timestamps();
        });
   }

    public function down()
    {
        Schema::droplfExists('brodatas');
    }
}
