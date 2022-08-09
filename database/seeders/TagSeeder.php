<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = Tag::first();
        if (!$tag) {
            $this->command->line("Generating Tags");
            $tags = ['Education', 'Sport', 'Game', 'Technology', 'Novel', 'Mathematics', 'Statistics',
                'Politic', 'ข่าวรายวัน', 'อาหาร', 'ของหวาน', 'ร้านเด็ด', 'ดารา', 'รายการโทรทัศน์', 'OSX', 'Laravel',
                'ข่าวสั้นทันโลก', 'วิทยาการคอมพิวเตอร์', 'คนดีขอโทษที่ทำให้วุ่นวาย', 'แล้วฉันเลือกอะไรได้ไหม', 'กดDropตรงไหน',
                'กดUndoตรงไหน', 'อยากเก็บเธอไว้ทั้งสองคน', 'อยากเป็นแฟนแต่ได้แค่เพื่อนคุย', 'เกินปุยมุ้ย', 'แฟนใหม่หน้าคุ้นจัง',
                'อยู่คนเดียวมานานหลายปี', 'จนเธอเข้ามาอยู่ในหัวใจ', 'คงเป็นเพราะฉันคิดไปเองทั้งนั้น', 'มีแต่ฉันที่คิดไปฝ่ายเดียว',
                'บอกฉันทีว่าจริง', 'ขอให้หยุดไว้เป็นเพียงแค่คนคุ้นเคย', 'หรือฉันคิดแต่ไม่ถึง', 'คิดอยู่ทุกวัน', 'น้อยลงทุกวัน',
                'มันเท่ากันหรือเปล่า'];
            collect($tags)->each(function ($tag_name, $key) {
                $tag = new Tag();
                $tag->name = $tag_name;
                $tag->save();
            });
        }

        $this->command->line("Generating tags for all posts");
        $posts = Post::get();
        $posts->each(function($post, $key) {
            $n = fake()->numberBetween(1, 5);
            $tag_ids = Tag::inRandomOrder()->limit($n)->get()->pluck(['id'])->all();
            $post->tags()->sync($tag_ids);
        });
    }
}
