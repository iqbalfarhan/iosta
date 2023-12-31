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
        // $oldata = [
        //     'peruntukan_id' => $peruntukan->id,
        //     'luas_awal' => $peruntukan->getOriginal('luas'),
        //     'luas_baru' => $peruntukan->luas,
        //     'klasifikasi_awal' => $peruntukan->getOriginal('klasifikasi'),
        //     'klasifikasi_baru' => $peruntukan->klasifikasi,
        //     'peruntukan_awal' => $peruntukan->getOriginal('peruntukan'),
        //     'peruntukan_baru' => $peruntukan->peruntukan,
        //     'fileba' => $peruntukan->fileba,
        // ];

        // LogPeruntukan::create($oldata);
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