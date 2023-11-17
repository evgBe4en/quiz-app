<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Result;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Result::factory(15)->create();


        Question::factory()->create([
            'text' => 'Яка з ролей в Dota 2 відповідає за атаку та завдання значного пошкодження ворожим героям?',
        ]);
        Question::factory()->create([
            'text' => 'Яка лінія в Dota 2 зазвичай призначена для героїв, які швидко здобувають рівень та золото?',
        ]);
        Question::factory()->create([
            'text' => 'Який герой може використовувати "Blink Dagger" для стрибків на велику відстань?',
        ]);
        Question::factory()->create([
            'text' => 'Яке створіння можна викликати героєм Natures Prophet для допомоги в бою?',
        ]);
        Question::factory()->create([
            'text' => 'Як називається атака, яка завдає шкоду всім ворожим героям в певній області?',
        ]);
        Question::factory()->create([
            'text' => 'Яка здатність героя Juggernaut дає йому імунітет до всіх заклинань та атак?',
        ]);
        Question::factory()->create([
            'text' => 'Який герой має здатність створювати копії себе, щоб завдавати додатковий шкоду ворогам?',
        ]);
        Question::factory()->create([
            'text' => ' Яка здатність героя Earthshaker може відкидати ворожих героїв в повітря?',
        ]);
        Question::factory()->create([
            'text' => 'Яке створіння можна викликати героєм Warlock для допомоги в бою?',
        ]);
        Question::factory()->create([
            'text' => ' Який інструмент дозволяє гравцеві змінювати місцезнаходження свого героя на карті?',
        ]);

        Answer::factory()->create([
            'question_id' => '1',
            'answer_text' => 'Підтримка',
            'is_correct' => '0'
        ]);
        Answer::factory()->create([
            'question_id' => '1',
            'answer_text' => 'Керi',
            'is_correct' => '1'
        ]);
        Answer::factory()->create([
            'question_id' => '1',
            'answer_text' => 'Хардлайнер',
            'is_correct' => '0'
        ]);
        Answer::factory()->create([
            'question_id' => '2',
            'answer_text' => 'Верхня лінія',
            'is_correct' => '0'
        ]);
        Answer::factory()->create([
            'question_id' => '2',
            'answer_text' => 'Ліс',
            'is_correct' => '1'
        ]);
        Answer::factory()->create([
            'question_id' => '2',
            'answer_text' => 'Середня лінія',
            'is_correct' => '0'
        ]);
        Answer::factory()->create([
            'question_id' => '3',
            'answer_text' => 'Anti-Mage',
            'is_correct' => '0'
        ]);
        Answer::factory()->create([
            'question_id' => '3',
            'answer_text' => 'Queen of Pain',
            'is_correct' => '0'
        ]);
        Answer::factory()->create([
            'question_id' => '3',
            'answer_text' => 'Будь-який',
            'is_correct' => '1'
        ]);
        Answer::factory()->create([
            'question_id' => '4',
            'answer_text' => 'Boar',
            'is_correct' => '0'
        ]);
        Answer::factory()->create([
            'question_id' => '4',
            'answer_text' => 'Treant',
            'is_correct' => '1'
        ]);
        Answer::factory()->create([
            'question_id' => '4',
            'answer_text' => 'Hawk',
            'is_correct' => '0'
        ]);
        Answer::factory()->create([
            'question_id' => '5',
            'answer_text' => 'AoE (Area of Effect)',
            'is_correct' => '1'
        ]);
        Answer::factory()->create([
            'question_id' => '5',
            'answer_text' => 'DPS (Damage per Second)',
            'is_correct' => '0'
        ]);
        Answer::factory()->create([
            'question_id' => '5',
            'answer_text' => 'CC (Crowd Control)',
            'is_correct' => '0'
        ]);
        Answer::factory()->create([
            'question_id' => '6',
            'answer_text' => 'Blade Fury',
            'is_correct' => '1'
        ]);
        Answer::factory()->create([
            'question_id' => '6',
            'answer_text' => 'Healing Ward',
            'is_correct' => '0'
        ]);
        Answer::factory()->create([
            'question_id' => '6',
            'answer_text' => 'Omnislash',
            'is_correct' => '0'
        ]);
        Answer::factory()->create([
            'question_id' => '7',
            'answer_text' => 'Phantom Lancer',
            'is_correct' => '1'
        ]);
        Answer::factory()->create([
            'question_id' => '7',
            'answer_text' => 'Phantom Assassin',
            'is_correct' => '0'
        ]);
        Answer::factory()->create([
            'question_id' => '7',
            'answer_text' => 'Rubick',
            'is_correct' => '0'
        ]);
        Answer::factory()->create([
            'question_id' => '8',
            'answer_text' => 'Fissure',
            'is_correct' => '0'
        ]);
        Answer::factory()->create([
            'question_id' => '8',
            'answer_text' => 'Echo Slam',
            'is_correct' => '1'
        ]);
        Answer::factory()->create([
            'question_id' => '8',
            'answer_text' => 'Enchant Totem',
            'is_correct' => '0'
        ]);
        Answer::factory()->create([
            'question_id' => '9',
            'answer_text' => 'Observer Ward',
            'is_correct' => '0'
        ]);
        Answer::factory()->create([
            'question_id' => '9',
            'answer_text' => 'Smoke of Deceit',
            'is_correct' => '0'
        ]);
        Answer::factory()->create([
            'question_id' => '9',
            'answer_text' => 'Town Portal Scroll',
            'is_correct' => '1'
        ]);
        Answer::factory()->create([
            'question_id' => '10',
            'answer_text' => 'Golem',
            'is_correct' => '1'
        ]);
        Answer::factory()->create([
            'question_id' => '10',
            'answer_text' => 'Dragon',
            'is_correct' => '0'
        ]);
        Answer::factory()->create([
            'question_id' => '10',
            'answer_text' => 'Elemental',
            'is_correct' => '0'
        ]);
    }
}
