<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Employe;
use App\Models\Absence;
use App\Models\Pointage;
use Carbon\Carbon;

class CheckAbsences extends Command
{
    protected $signature = 'check:absences';
    protected $description = 'Vérifie les absences des employés';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $today = Carbon::today();
        $employes = Employe::all();

        foreach ($employes as $employe) {
            // Vérifier s'il y a un pointage pour aujourd'hui
            $pointage = Pointage::where('employeId', $employe->id)
                                ->where('date_pointage', $today)
                                ->first();

            if (!$pointage) {
                // Ajouter une absence automatique
                Absence::create([
                    'employeId' => $employe->id,
                    'date_debut' => $today,
                    'date_fin' => null,
                    'raison' => 'Absence non justifiée',
                    'status' => 'en attente',
                    'is_prevu' => false,
                ]);
            }
        }

        $this->info('Les absences automatiques ont été vérifiées.');
    }
}

