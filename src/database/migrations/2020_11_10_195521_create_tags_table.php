<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Tag;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
        });

        $data = [
          [
            'name' => 'Eletrônicos',
            'slug' => 'eletronicos'
          ],
          [
            'name' => 'Jogos',
            'slug' => 'jogos'
          ],
          [
            'name' => 'Eletrodomésticos',
            'slug' => 'eletrodomesticos'
          ],
          [
            'name' => 'Utensílios',
            'slug' => 'utensilios',
          ],
          [
            'name' => 'Vestuário',
            'slug' => 'vestuario',
          ],
          [
            'name' => 'Decorações',
            'slug' => 'decoracoes',
          ],
          [
            'name' => 'Presentes',
            'slug' => 'presentes',
          ],
          [
            'name' => 'Diversos',
            'slug' => 'diversos',
          ],
        ];

        Tag::insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
}
