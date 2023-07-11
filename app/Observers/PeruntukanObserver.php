<?php

namespace App\Observers;

use App\Models\LogPeruntukan;
use App\Models\Peruntukan;

class PeruntukanObserver
{
    public $afterCommit = false;

    /**
     * Handle the Peruntukan "created" event.
     */
    public function created(Peruntukan $peruntukan): void
    {
        // dd($peruntukan->getOriginal(), $peruntukan->luas);
    }

    /**
     * Handle the Peruntukan "updated" event.
     */
    public function updated(Peruntukan $peruntukan): void
    {
        // dd("updated");
    }

    /**
     * Handle the Peruntukan "updating" event.
     */
    public function updating(Peruntukan $peruntukan): void
    {
        $oldata = [
            'peruntukan_id' => $peruntukan->id,
            'luas' => $peruntukan->getOriginal('luas'),
            'klasifikasi' => $peruntukan->getOriginal('klasifikasi'),
            'peruntukan' => $peruntukan->getOriginal('peruntukan'),
            'fileba' => $peruntukan->getOriginal('fileba'),
        ];

        LogPeruntukan::create($oldata);
    }

    /**
     * Handle the Peruntukan "deleted" event.
     */
    public function deleted(Peruntukan $peruntukan): void
    {
        //
    }

    /**
     * Handle the Peruntukan "restored" event.
     */
    public function restored(Peruntukan $peruntukan): void
    {
        //
    }

    /**
     * Handle the Peruntukan "force deleted" event.
     */
    public function forceDeleted(Peruntukan $peruntukan): void
    {
        //
    }
}