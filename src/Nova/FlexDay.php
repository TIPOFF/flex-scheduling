<?php

declare(strict_types=1);

namespace Tipoff\FlexScheduling\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;
use Tipoff\Support\Nova\BaseResource;

class FlexDay extends BaseResource
{
    public static $model = \Tipoff\FlexScheduling\Models\FlexDay::class;

    public static $title = 'date';

    public static $search = [
        'id',
        'date',
    ];

    public function fieldsForIndex(NovaRequest $request)
    {
        return array_filter([
            ID::make()->sortable(),
        ]);
    }

    public function fields(Request $request)
    {
        return array_filter([
            Date::make('Date')->required()->sortable()->creationRules('unique:flex_days,date'),

            Number::make('Total staff')->required()->min(0)->max(255),
            Number::make('Total games')->required()->min(0)->max(255),

            Number::make('Staff 8')->required()->min(0)->max(255),
            Number::make('Staff 9')->required()->min(0)->max(255),
            Number::make('Staff 10')->required()->min(0)->max(255),
            Number::make('Staff 11')->required()->min(0)->max(255),
            Number::make('Staff 12')->required()->min(0)->max(255),
            Number::make('Staff 13')->required()->min(0)->max(255),
            Number::make('Staff 14')->required()->min(0)->max(255),
            Number::make('Staff 15')->required()->min(0)->max(255),
            Number::make('Staff 16')->required()->min(0)->max(255),
            Number::make('Staff 17')->required()->min(0)->max(255),
            Number::make('Staff 18')->required()->min(0)->max(255),
            Number::make('Staff 19')->required()->min(0)->max(255),
            Number::make('Staff 20')->required()->min(0)->max(255),
            Number::make('Staff 21')->required()->min(0)->max(255),
            Number::make('Staff 22')->required()->min(0)->max(255),
            Number::make('Staff 23')->required()->min(0)->max(255),

            Number::make('Max 8')->required()->min(0)->max(255),
            Number::make('Max 9')->required()->min(0)->max(255),
            Number::make('Max 10')->required()->min(0)->max(255),
            Number::make('Max 11')->required()->min(0)->max(255),
            Number::make('Max 12')->required()->min(0)->max(255),
            Number::make('Max 13')->required()->min(0)->max(255),
            Number::make('Max 14')->required()->min(0)->max(255),
            Number::make('Max 15')->required()->min(0)->max(255),
            Number::make('Max 16')->required()->min(0)->max(255),
            Number::make('Max 17')->required()->min(0)->max(255),
            Number::make('Max 18')->required()->min(0)->max(255),
            Number::make('Max 19')->required()->min(0)->max(255),
            Number::make('Max 20')->required()->min(0)->max(255),
            Number::make('Max 21')->required()->min(0)->max(255),
            Number::make('Max 22')->required()->min(0)->max(255),
            Number::make('Max 23')->required()->min(0)->max(255),

            Number::make('Bucket 8')->required()->min(0)->max(255),
            Number::make('Bucket 9')->required()->min(0)->max(255),
            Number::make('Bucket 10')->required()->min(0)->max(255),
            Number::make('Bucket 11')->required()->min(0)->max(255),
            Number::make('Bucket 12')->required()->min(0)->max(255),
            Number::make('Bucket 13')->required()->min(0)->max(255),
            Number::make('Bucket 14')->required()->min(0)->max(255),
            Number::make('Bucket 15')->required()->min(0)->max(255),
            Number::make('Bucket 16')->required()->min(0)->max(255),
            Number::make('Bucket 17')->required()->min(0)->max(255),
            Number::make('Bucket 18')->required()->min(0)->max(255),
            Number::make('Bucket 19')->required()->min(0)->max(255),
            Number::make('Bucket 20')->required()->min(0)->max(255),
            Number::make('Bucket 21')->required()->min(0)->max(255),
            Number::make('Bucket 22')->required()->min(0)->max(255),
            Number::make('Bucket 23')->required()->min(0)->max(255),

            new Panel('Data Fields', $this->dataFields()),
        ]);
    }

    public function dataFields(): array
    {
        return array_merge(
            parent::dataFields(),
            [
                DateTime::make('Created At')->exceptOnForms(),
                $this->updaterDataFields(),
            ]
        );
    }
}
