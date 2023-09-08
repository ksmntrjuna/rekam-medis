<?php

namespace App\Console\Commands;

use App\Models\Patient;
use App\Models\Photo;
use Illuminate\Console\Command;

class FetchPatientPhotos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:patient';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // return 0;
        $photos = Photo::
        // whereNull('patient_name')->
        get();
        foreach($photos as $photo){
            $patient = Patient::where('nobase', $photo->nobase)->first();
            if($patient){
                $p = Photo::find($photo->id);
                $p->patient_name = $patient->name;
                $p->save();
                $this->info($patient->name);
            }else{
                $this->info('null');
            }
        }
    }
}
