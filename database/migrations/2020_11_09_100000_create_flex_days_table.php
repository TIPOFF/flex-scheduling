<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlexDaysTable extends Migration
{
    public function up()
    {
        Schema::create('flex_days', function (Blueprint $table) {
            $table->id();
            $table->date('date')->index()->unique();
            $table->unsignedTinyInteger('total_staff'); // Really is the max remote monitors on duty during an hour in the day, or the peak staff. Later when employees clcok, in it will be the total.
            $table->unsignedTinyInteger('total_games'); // Counter of total bookings & resova blocks for the day (games to be played)

            $table->unsignedTinyInteger('staff_8'); // Staff from 8am to 9am
            $table->unsignedTinyInteger('staff_9'); // Staff from 9am to 10am
            $table->unsignedTinyInteger('staff_10'); // Staff from 10am to 11am
            $table->unsignedTinyInteger('staff_11'); // Staff from 11am to noon
            $table->unsignedTinyInteger('staff_12'); // Staff from 12pm to 1pm
            $table->unsignedTinyInteger('staff_13'); // Staff from 1pm to 2pm
            $table->unsignedTinyInteger('staff_14'); // Staff from 2pm to 3pm
            $table->unsignedTinyInteger('staff_15'); // Staff from 3pm to 4pm
            $table->unsignedTinyInteger('staff_16'); // Staff from 4pm to 5pm
            $table->unsignedTinyInteger('staff_17'); // Staff from 5pm to 6pm
            $table->unsignedTinyInteger('staff_18'); // Staff from 6pm to 7pm
            $table->unsignedTinyInteger('staff_19'); // Staff from 7pm to 8pm
            $table->unsignedTinyInteger('staff_20'); // Staff from 8pm to 9pm
            $table->unsignedTinyInteger('staff_21'); // Staff from 9pm to 10pm
            $table->unsignedTinyInteger('staff_22'); // Staff from 10pm to 11pm
            $table->unsignedTinyInteger('staff_23'); // Staff from 11pm to 12pm

            $table->unsignedTinyInteger('max_8'); // Max from 8am to 9am
            $table->unsignedTinyInteger('max_9'); // Max from 9am to 10am
            $table->unsignedTinyInteger('max_10'); // Max from 10am to 11am
            $table->unsignedTinyInteger('max_11'); // Max from 11am to noon
            $table->unsignedTinyInteger('max_12'); // Max from 12pm to 1pm
            $table->unsignedTinyInteger('max_13'); // Max from 1pm to 2pm
            $table->unsignedTinyInteger('max_14'); // Max from 2pm to 3pm
            $table->unsignedTinyInteger('max_15'); // Max from 3pm to 4pm
            $table->unsignedTinyInteger('max_16'); // Max from 4pm to 5pm
            $table->unsignedTinyInteger('max_17'); // Max from 5pm to 6pm
            $table->unsignedTinyInteger('max_18'); // Max from 6pm to 7pm
            $table->unsignedTinyInteger('max_19'); // Max from 7pm to 8pm
            $table->unsignedTinyInteger('max_20'); // Max from 8pm to 9pm
            $table->unsignedTinyInteger('max_21'); // Max from 9pm to 10pm
            $table->unsignedTinyInteger('max_22'); // Max from 10pm to 11pm
            $table->unsignedTinyInteger('max_23'); // Max from 11pm to 12pm

            $table->unsignedTinyInteger('bucket_8'); // Bucket is used to track bookings that overlap into 8am to 9am
            $table->unsignedTinyInteger('bucket_9'); // Bucket is used to track bookings that overlap into from 9am to 10am
            $table->unsignedTinyInteger('bucket_10'); // Bucket is used to track bookings that overlap into from 10am to 11am
            $table->unsignedTinyInteger('bucket_11'); // Bucket is used to track bookings that overlap into from 11am to noon
            $table->unsignedTinyInteger('bucket_12'); // Bucket is used to track bookings that overlap into from 12pm to 1pm
            $table->unsignedTinyInteger('bucket_13'); // Bucket is used to track bookings that overlap into from 1pm to 2pm
            $table->unsignedTinyInteger('bucket_14'); // Bucket is used to track bookings that overlap into from 2pm to 3pm
            $table->unsignedTinyInteger('bucket_15'); // Bucket is used to track bookings that overlap into from 3pm to 4pm
            $table->unsignedTinyInteger('bucket_16'); // Bucket is used to track bookings that overlap into from 4pm to 5pm
            $table->unsignedTinyInteger('bucket_17'); // Bucket is used to track bookings that overlap into from 5pm to 6pm
            $table->unsignedTinyInteger('bucket_18'); // Bucket is used to track bookings that overlap into from 6pm to 7pm
            $table->unsignedTinyInteger('bucket_19'); // Bucket is used to track bookings that overlap into from 7pm to 8pm
            $table->unsignedTinyInteger('bucket_20'); // Bucket is used to track bookings that overlap into from 8pm to 9pm
            $table->unsignedTinyInteger('bucket_21'); // Bucket is used to track bookings that overlap into from 9pm to 10pm
            $table->unsignedTinyInteger('bucket_22'); // Bucket is used to track bookings that overlap into from 10pm to 11pm
            $table->unsignedTinyInteger('bucket_23'); // Bucket is used to track bookings that overlap into from 11pm to 12pm

            $table->foreignIdFor(app('user'), 'updater_id')->nullable();
            $table->timestamps();
        });
    }
}
