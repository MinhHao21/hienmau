<?php

namespace App\Observers;

use App\Models\Audio;
use App\Models\Fileupload;

class AudioObserver
{
    /**
     * Handle the Audio "created" event.
     *
     * @param  \App\Models\Audio  $audio
     * @return void
     */
    public function created(Audio $audio)
    {
        $file = Fileupload::where('idtruong', $audio->uuid)->get();
        foreach ($file as $f) {
            $f->idtruong = $audio->id;
            $f->save();
        }
    }

    /**
     * Handle the Audio "updated" event.
     *
     * @param  \App\Models\Audio  $audio
     * @return void
     */
    public function updated(Audio $audio)
    {
        $file = Fileupload::where('idtruong', $audio->uuid)->get();
        foreach ($file as $f) {
            $f->idtruong = $audio->id;
            $f->save();
        }
    }

    /**
     * Handle the Audio "deleted" event.
     *
     * @param  \App\Models\Audio  $audio
     * @return void
     */
    public function deleted(Audio $audio)
    {
        //
    }

    /**
     * Handle the Audio "restored" event.
     *
     * @param  \App\Models\Audio  $audio
     * @return void
     */
    public function restored(Audio $audio)
    {
        //
    }

    /**
     * Handle the Audio "force deleted" event.
     *
     * @param  \App\Models\Audio  $audio
     * @return void
     */
    public function forceDeleted(Audio $audio)
    {
        //
    }
}
