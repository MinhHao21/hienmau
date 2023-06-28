<?php

namespace App\Observers;

use App\Models\Document;
use App\Models\Fileupload;

class DocumentObserver
{
    /**
     * Handle the Document "created" event.
     *
     * @param  \App\Models\Document  $document
     * @return void
     */
    public function created(Document $document)
    {
        $file = Fileupload::where('idtruong', $document->uuid)->get();
        foreach ($file as $f) {
            $f->idtruong = $document->id;
            $f->save();
        }
    }

    /**
     * Handle the Document "updated" event.
     *
     * @param  \App\Models\Document  $document
     * @return void
     */
    public function updated(Document $document)
    {
        $file = Fileupload::where('idtruong', $document->uuid)->get();
        foreach ($file as $f) {
            $f->idtruong = $document->id;
            $f->save();
        }
    }

    /**
     * Handle the Document "deleted" event.
     *
     * @param  \App\Models\Document  $document
     * @return void
     */
    public function deleted(Document $document)
    {
        //
    }

    /**
     * Handle the Document "restored" event.
     *
     * @param  \App\Models\Document  $document
     * @return void
     */
    public function restored(Document $document)
    {
        //
    }

    /**
     * Handle the Document "force deleted" event.
     *
     * @param  \App\Models\Document  $document
     * @return void
     */
    public function forceDeleted(Document $document)
    {
        //
    }
}
