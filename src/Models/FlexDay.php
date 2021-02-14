<?php

namespace Tipoff\FlexScheduling\Models;

use Tipoff\Support\Models\BaseModel;
use Tipoff\Support\Traits\HasPackageFactory;
use Tipoff\Support\Traits\HasUpdater;

class FlexDay extends BaseModel
{
    use HasPackageFactory;
    use HasUpdater;

    protected $casts = [
        'date' => 'date',
    ];

    protected $table = 'flex_days';

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($day) {
            $day->generateDefaults();
        });

        static::saving(function ($day) {
            $day->updateMax();
            $day->updateStaffTotal();
        });
    }

    public function generateDefaults()
    {
        $this->total_games = 0;
        $this->bucket_8 = 0;
        $this->bucket_9 = 0;
        $this->bucket_10 = 0;
        $this->bucket_11 = 0;
        $this->bucket_12 = 0;
        $this->bucket_13 = 0;
        $this->bucket_14 = 0;
        $this->bucket_15 = 0;
        $this->bucket_16 = 0;
        $this->bucket_17 = 0;
        $this->bucket_18 = 0;
        $this->bucket_19 = 0;
        $this->bucket_20 = 0;
        $this->bucket_21 = 0;
        $this->bucket_22 = 0;
        $this->bucket_23 = 0;
        $this->updater_id = 1;
        if (date('w', $this->day) == 1) {
            $this->generateMonTuesStaff();
        }
        if (date('w', $this->day) == 2) {
            $this->generateMonTuesStaff();
        }
        if (date('w', $this->day) == 3) {
            $this->generateWedThursStaff();
        }
        if (date('w', $this->day) == 4) {
            $this->generateWedThursStaff();
        }
        if (date('w', $this->day) == 5) {
            $this->generateFridayStaff();
        }
        if (date('w', $this->day) == 6) {
            $this->generateSaturdayStaff();
        }
        if (date('w', $this->day) == 0) {
            $this->generateSundayStaff();
        }
        $this->updateStaffTotal();
    }

    public function generateMonTuesStaff()
    {
        $this->staff_8 = 0;
        $this->staff_9 = 0;
        $this->staff_10 = 0;
        $this->staff_11 = 0;
        $this->staff_12 = 0;
        $this->staff_13 = 0;
        $this->staff_14 = 0;
        $this->staff_15 = 0;
        $this->staff_16 = 0;
        $this->staff_17 = 0;
        $this->staff_18 = 0;
        $this->staff_19 = 0;
        $this->staff_20 = 0;
        $this->staff_21 = 0;
        $this->staff_22 = 0;
        $this->staff_23 = 0;
    }

    public function generateWedThursStaff()
    {
        $this->staff_8 = 0;
        $this->staff_9 = 0;
        $this->staff_10 = 0;
        $this->staff_11 = 0;
        $this->staff_12 = 0;
        $this->staff_13 = 0;
        $this->staff_14 = 0;
        $this->staff_15 = 0;
        $this->staff_16 = 0;
        $this->staff_17 = 5;
        $this->staff_18 = 5;
        $this->staff_19 = 5;
        $this->staff_20 = 5;
        $this->staff_21 = 5;
        $this->staff_22 = 5;
        $this->staff_23 = 0;
    }

    public function generateFridayStaff()
    {
        $this->staff_8 = 0;
        $this->staff_9 = 0;
        $this->staff_10 = 0;
        $this->staff_11 = 0;
        $this->staff_12 = 0;
        $this->staff_13 = 0;
        $this->staff_14 = 0;
        $this->staff_15 = 0;
        $this->staff_16 = 0;
        $this->staff_17 = 6;
        $this->staff_18 = 6;
        $this->staff_19 = 6;
        $this->staff_20 = 6;
        $this->staff_21 = 6;
        $this->staff_22 = 6;
        $this->staff_23 = 0;
    }

    public function generateSaturdayStaff()
    {
        $this->staff_8 = 0;
        $this->staff_9 = 0;
        $this->staff_10 = 0;
        $this->staff_11 = 0;
        $this->staff_12 = 0;
        $this->staff_13 = 4;
        $this->staff_14 = 4;
        $this->staff_15 = 6;
        $this->staff_16 = 6;
        $this->staff_17 = 6;
        $this->staff_18 = 6;
        $this->staff_19 = 6;
        $this->staff_20 = 6;
        $this->staff_21 = 6;
        $this->staff_22 = 0;
        $this->staff_23 = 0;
    }

    public function generateSundayStaff()
    {
        $this->staff_8 = 0;
        $this->staff_9 = 0;
        $this->staff_10 = 0;
        $this->staff_11 = 4;
        $this->staff_12 = 4;
        $this->staff_13 = 4;
        $this->staff_14 = 4;
        $this->staff_15 = 4;
        $this->staff_16 = 4;
        $this->staff_17 = 4;
        $this->staff_18 = 4;
        $this->staff_19 = 0;
        $this->staff_20 = 0;
        $this->staff_21 = 0;
        $this->staff_22 = 0;
        $this->staff_23 = 0;
    }

    public function updateMax()
    {
        // Save hour ranges with a minimum of 4 concurrent games and a max of 2 times the number of on-duty remote monitors
        $this->max_8 = $this->staff_8 * 2 > 4 ? $this->staff_8 * 2 : 4;
        $this->max_9 = $this->staff_9 * 2 > 4 ? $this->staff_9 * 2 : 4;
        $this->max_10 = $this->staff_10 * 2 > 4 ? $this->staff_10 * 2 : 4;
        $this->max_11 = $this->staff_11 * 2 > 4 ? $this->staff_11 * 2 : 4;
        $this->max_12 = $this->staff_12 * 2 > 4 ? $this->staff_12 * 2 : 4;
        $this->max_13 = $this->staff_13 * 2 > 4 ? $this->staff_13 * 2 : 4;
        $this->max_14 = $this->staff_14 * 2 > 4 ? $this->staff_14 * 2 : 4;
        $this->max_15 = $this->staff_15 * 2 > 4 ? $this->staff_15 * 2 : 4;
        $this->max_16 = $this->staff_16 * 2 > 4 ? $this->staff_16 * 2 : 4;
        $this->max_17 = $this->staff_17 * 2 > 4 ? $this->staff_17 * 2 : 4;
        $this->max_18 = $this->staff_18 * 2 > 4 ? $this->staff_18 * 2 : 4;
        $this->max_19 = $this->staff_19 * 2 > 4 ? $this->staff_19 * 2 : 4;
        $this->max_20 = $this->staff_20 * 2 > 4 ? $this->staff_20 * 2 : 4;
        $this->max_21 = $this->staff_21 * 2 > 4 ? $this->staff_21 * 2 : 4;
        $this->max_22 = $this->staff_22 * 2 > 4 ? $this->staff_22 * 2 : 4;
        $this->max_23 = $this->staff_23 * 2 > 4 ? $this->staff_23 * 2 : 4;
    }

    public function updateStaffTotal()
    {
        $this->total_staff = max(
            $this->staff_8,
            $this->staff_9,
            $this->staff_10,
            $this->staff_11,
            $this->staff_12,
            $this->staff_13,
            $this->staff_14,
            $this->staff_15,
            $this->staff_16,
            $this->staff_17,
            $this->staff_18,
            $this->staff_19,
            $this->staff_20,
            $this->staff_21,
            $this->staff_22,
            $this->staff_23
        );
    }
}
