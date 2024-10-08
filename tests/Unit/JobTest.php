<?php

use App\Models\Job;
use App\Models\Employer;
use GuzzleHttp\Promise\Create;

it('it belongs to employer', function () {
    //Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' =>$employer->id,
    ]);

    //Act and //Assert
    expect($job->employer->is($employer))->toBeTrue();
});

it('can have tags', function() {

    $job = Job::factory()->create();

    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);
});




