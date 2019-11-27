<?php

namespace App\Console\Commands\CarBrand;

use App\Entity\Categories\Car\CarBrand;
use Illuminate\Console\Command;

class EditCarBrandStatusCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'carbrand:statusClosed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Закрыть если нет потомков';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    private $carBrand;
    public function __construct(CarBrand $carBrand)
    {
        parent::__construct();
        $this->carBrand = $carBrand;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $carBrands = $this->carBrand->whereIsRoot()->defaultOrder()->getModels();

        foreach ($carBrands as $carBrand) {
            if (!$carBrand->children->count())
            {
                $carBrand->update([
                    'status' => CarBrand::STATUS_CLOSED
                ]);
            }
        }

    }
}
