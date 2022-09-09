<?php

use App\TrainModel;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = 
        [
            [
                'company' => 'trenitalia',
                'departure_station' => 'Turin',
                'arrivals_station' => 'Rome',
                'departure_time' => '8.00',
                'arrival_time' => '13.00',
                'train_code' => '12345',
                'number_carriages' => 5,
                'in_time' => true,
                'is_deleted' => false,
            ],
            [
                'company' => 'trenitalia',
                'departure_station' => 'Rome',
                'arrivals_station' => 'Turin',
                'departure_time' => '12.00',
                'arrival_time' => '17.00',
                'train_code' => '23456',
                'number_carriages' => 5,
                'in_time' => false,
                'is_deleted' => false,

            ],
            [
                'company' => 'italo',
                'departure_station' => 'Naples',
                'arrivals_station' => 'Milan',
                'departure_time' => '10.00',
                'arrival_time' => '15.00',
                'train_code' => '10987',
                'number_carriages' => 4,
                'in_time' => false,
                'is_deleted' => true,

            ],
            [
                'company' => 'trenitalia',
                'departure_station' => 'Venice',
                'arrivals_station' => 'Genoa',
                'departure_time' => '5.00',
                'arrival_time' => '9.00',
                'train_code' => '75784',
                'number_carriages' => 2,
                'in_time' => true,
                'is_deleted' => false,

            ],
            [
                'company' => 'trenitalia',
                'departure_station' => 'Leghorn',
                'arrivals_station' => 'Florence',
                'departure_time' => '7.00',
                'arrival_time' => '8.30',
                'train_code' => '547293',
                'number_carriages' => 6,
                'in_time' => false,
                'is_deleted' => false,

            ],
            [
                'company' => 'frecciarossa',
                'departure_station' => 'Rome',
                'arrivals_station' => 'Berlin',
                'departure_time' => '9.30',
                'arrival_time' => '16.25',
                'train_code' => '698435',
                'number_carriages' => 10,
                'in_time' => true,
                'is_deleted' => false,

            ],
        ];

        foreach ($trains as $train) {
            $newTrain = new TrainModel();
            $newTrain->company = $train['company'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrivals_station = $train['arrivals_station'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->number_carriages = $train['number_carriages'];
            $newTrain->in_time = $train['in_time'];
            $newTrain->is_deleted = $train['is_deleted'];
            $newTrain->save();
        };
    }
}
