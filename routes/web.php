<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/feed', function () {
    $feedItems = json_decode(json_encode([
        [
            'postedDateTime' => '3h',
            'content' => <<<str
            <p>
            I made this! <a href="#">#myartwork</a> <a href="#">#pixl</a>
        </p>
        <img src="/images/simon-chilling.png" alt="simon-chilling" />
str,
            'likeCount' => 24,
            'replyCount' => 3,
            'repostCount' => 5,

            'profile' => [
                'avatar' => '/images/michael.png',
                'displayname' => 'Michael',
                'handle' => '@mmich_jj',
            ]
        ]
    ]));

    return view('feed', compact('feedItems'));
})->name('feed');

Route::get('/profile', function () {
    $feedItems = json_decode(json_encode([
        [
            'postedDateTime' => '3h',
            'content' => <<<str
            <p>
            I made this! <a href="#">#myartwork</a> <a href="#">#pixl</a>
        </p>
        <img src="/images/simon-chilling.png" alt="simon-chilling" />
str,
            'likeCount' => 24,
            'replyCount' => 3,
            'repostCount' => 5,

            'profile' => [
                'avatar' => '/images/michael.png',
                'displayname' => 'Michael',
                'handle' => '@mmich_jj',
            ]
        ]
    ]));

    return view('profile', compact('feedItems'));
})->name('profile');
