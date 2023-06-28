<?php

namespace App\Observers;

use App\Models\Caulacbo;
use App\Models\Fileupload;

class CaulacboObserver
{
    /**
     * Handle the Caulacbo "created" event.
     *
     * @param  \App\Models\Caulacbo  $caulacbo
     * @return void
     */
    public function created(Caulacbo $caulacbo)
    {
        $file = Fileupload::where('idtruong', $caulacbo->uuid)->get();
        foreach ($file as $f) {
            $f->idtruong = $caulacbo->id;
            $f->save();
        }
    }

    /**
     * Handle the Caulacbo "updated" event.
     *
     * @param  \App\Models\Caulacbo  $caulacbo
     * @return void
     */
    public function updated(Caulacbo $caulacbo)
    {
        $file = Fileupload::where('idtruong', $caulacbo->uuid)->get();
        foreach ($file as $f) {
            $f->idtruong = $caulacbo->id;
            $f->save();
        }
    }

    /**
     * Handle the Caulacbo "deleted" event.
     *
     * @param  \App\Models\Caulacbo  $caulacbo
     * @return void
     */
    public function deleted(Caulacbo $caulacbo)
    {
        //
    }

    /**
     * Handle the Caulacbo "restored" event.
     *
     * @param  \App\Models\Caulacbo  $caulacbo
     * @return void
     */
    public function restored(Caulacbo $caulacbo)
    {
        //
    }

    /**
     * Handle the Caulacbo "force deleted" event.
     *
     * @param  \App\Models\Caulacbo  $caulacbo
     * @return void
     */
    public function forceDeleted(Caulacbo $caulacbo)
    {
        //
    }
}
