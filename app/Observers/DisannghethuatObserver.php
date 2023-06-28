<?php

namespace App\Observers;

use App\Models\Disannghethuat;
use App\Models\Fileupload;

class DisannghethuatObserver
{
    /**
     * Handle the Disannghethuat "created" event.
     *
     * @param  \App\Models\Disannghethuat  $disannghethuat
     * @return void
     */
    public function created(Disannghethuat $disannghethuat)
    {
        $file = Fileupload::where('idtruong', $disannghethuat->uuid)->get();
        foreach ($file as $f) {
            $f->idtruong = $disannghethuat->id;
            $f->save();
        }
    }

    /**
     * Handle the Disannghethuat "updated" event.
     *
     * @param  \App\Models\Disannghethuat  $disannghethuat
     * @return void
     */
    public function updated(Disannghethuat $disannghethuat)
    {
        $file = Fileupload::where('idtruong', $disannghethuat->uuid)->get();
        foreach ($file as $f) {
            $f->idtruong = $disannghethuat->id;
            $f->save();
        }
    }

    /**
     * Handle the Disannghethuat "deleted" event.
     *
     * @param  \App\Models\Disannghethuat  $disannghethuat
     * @return void
     */
    public function deleted(Disannghethuat $disannghethuat)
    {
        //
    }

    /**
     * Handle the Disannghethuat "restored" event.
     *
     * @param  \App\Models\Disannghethuat  $disannghethuat
     * @return void
     */
    public function restored(Disannghethuat $disannghethuat)
    {
        //
    }

    /**
     * Handle the Disannghethuat "force deleted" event.
     *
     * @param  \App\Models\Disannghethuat  $disannghethuat
     * @return void
     */
    public function forceDeleted(Disannghethuat $disannghethuat)
    {
        //
    }
}
