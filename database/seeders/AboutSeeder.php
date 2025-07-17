<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'title' => 'Berkant Karaca Kimdir?',
            'description_tr' => 'Bilgisayar Mühendisliği lisans eğitimimi mühendislik fakültesi birinciliği ile tamamladım. Erasmus+ Öğrenci Değişim Programı kapsamında Polonya\'da bir dönem eğitim alarak akademik ve kültürel anlamda uluslararası deneyim kazandım. Öğrencilik hayatım boyunca disiplinli çalışma alışkanlığım, öğrenmeye olan isteğim ve azmim sayesinde hem akademik hem de kişisel gelişimime sürekli katkı sağladım.

Öğrenmeye açık, disiplinli, sorumluluk sahibi ve ekip çalışmalarında etkili biriyim. Yazılım geliştirme süreçlerine ilgi duyuyor, özellikle backend alanında kendimi geliştiriyorum. Hedefim; teknolojiyi yakından takip eden, yenilikçi projelerde aktif rol alan ve çalıştığım kurumlara değer katan bir yazılım geliştirici olmaktır.',
            'description_en' => 'I completed my Computer Engineering undergraduate education as the top student of the engineering faculty. Through the Erasmus+ Student Exchange Program, I studied for one semester in Poland, gaining international academic and cultural experience. Throughout my student life, my disciplined work habits, eagerness to learn, and determination have continuously contributed to both my academic and personal development.

I am open to learning, disciplined, responsible, and effective in teamwork. I am interested in software development processes and specialize in backend development. My goal is to become a software developer who closely follows technology, takes an active role in innovative projects, and adds value to the institutions I work for.',
            'is_active' => true
        ]);
    }
}
