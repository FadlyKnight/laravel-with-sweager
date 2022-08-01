<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Candidate;
use App\Helpers\Helper;
use Faker\Generator as Faker;
use Illuminate\Http\UploadedFile;

$factory->define(Candidate::class, function (Faker $faker) {
    $helper = new Helper;
    return [
        // 'creator_id' => 1,
        'name' => $faker->name('Male'),
        'education' => $faker->address,
        'birthday' => $faker->date('Y-m-d', '2010-10-10'),
        'experience' => '5 Year',
        'last_position' => $faker->jobTitle,
        'applied' => $faker->jobTitle,
        'top_skill' => 'Laravel, Mysql, PostgreSQL, Codeigniter, Java',
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'resume' => $helper->uploadFile(UploadedFile::fake()->create('test.pdf'), 'resume'),
    ];
});
