<?php

namespace App\Observers;

use App\Models\Fileupload;
use App\Models\Nghesynghenhan;

class NghesynghenhanObserver
{
    /**
     * Handle the Nghesynghenhan "created" event.
     *
     * @param  \App\Models\Nghesynghenhan  $nghesynghenhan
     * @return void
     */
    public function created(Nghesynghenhan $nghesynghenhan)
    {
        $file = Fileupload::where('idtruong', $nghesynghenhan->uuid)->get();
        foreach ($file as $f) {
            $f->idtruong = $nghesynghenhan->id;
            $f->save();
        }
    }

    /**
     * Handle the Nghesynghenhan "updated" event.
     *
     * @param  \App\Models\Nghesynghenhan  $nghesynghenhan
     * @return void
     */
    public function updated(Nghesynghenhan $nghesynghenhan)
    {
        $file = Fileupload::where('idtruong', $nghesynghenhan->uuid)->get();
        foreach ($file as $f) {
            $f->idtruong = $nghesynghenhan->id;
            $f->save();
        }
    }

    /**
     * Handle the Nghesynghenhan "deleted" event.
     *
     * @param  \App\Models\Nghesynghenhan  $nghesynghenhan
     * @return void
     */
    public function deleted(Nghesynghenhan $nghesynghenhan)
    {
        //
    }

    /**
     * Handle the Nghesynghenhan "restored" event.
     *
     * @param  \App\Models\Nghesynghenhan  $nghesynghenhan
     * @return void
     */
    public function restored(Nghesynghenhan $nghesynghenhan)
    {
        //
    }

    /**
     * Handle the Nghesynghenhan "force deleted" event.
     *
     * @param  \App\Models\Nghesynghenhan  $nghesynghenhan
     * @return void
     */
    public function forceDeleted(Nghesynghenhan $nghesynghenhan)
    {
        //
    }
}
