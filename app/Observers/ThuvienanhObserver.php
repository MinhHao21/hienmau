<?php

namespace App\Observers;

use App\Models\Thuvienanh;
use App\Models\Fileupload;

class ThuvienanhObserver
{
    /**
     * Handle the Thuvienanh "created" event.
     *
     * @param  \App\Models\Thuvienanh  $thuvienanh
     * @return void
     */
    public function created(Thuvienanh $thuvienanh)
    {
        //
        $file = Fileupload::where('idtruong', $thuvienanh->uuid)->get();
        foreach ($file as $f) {
            $f->idtruong = $thuvienanh->id;
            $f->save();
        }
    }

    /**
     * Handle the Thuvienanh "updated" event.
     *
     * @param  \App\Models\Thuvienanh  $thuvienanh
     * @return void
     */
    public function updated(Thuvienanh $thuvienanh)
    {
        //
        $file = Fileupload::where('idtruong', $thuvienanh->uuid)->get();
        foreach ($file as $f) {
            $f->idtruong = $thuvienanh->id;
            $f->save();
        }
    }

    /**
     * Handle the Thuvienanh "deleted" event.
     *
     * @param  \App\Models\Thuvienanh  $thuvienanh
     * @return void
     */
    public function deleted(Thuvienanh $thuvienanh)
    {
        //
    }

    /**
     * Handle the Thuvienanh "restored" event.
     *
     * @param  \App\Models\Thuvienanh  $thuvienanh
     * @return void
     */
    public function restored(Thuvienanh $thuvienanh)
    {
        //
    }

    /**
     * Handle the Thuvienanh "force deleted" event.
     *
     * @param  \App\Models\Thuvienanh  $thuvienanh
     * @return void
     */
    public function forceDeleted(Thuvienanh $thuvienanh)
    {
        //
    }
}
