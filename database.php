<?php

require_once 'vendor/autoload.php';

use Kreait\Firebase\Factory;

function db_insert(array $array)
{
    $factory = new Factory();
    $database = $factory->withServiceAccount(__DIR__.'/secret/practice-f9c1b-067f82e56870.json')->createDatabase();        

    $newPost =$database->getReference('Teams')->push(
        ['Team name' => $array['team_name'], 'Members' => [
                'member 1' => ['name' => $array['member1']['name'], 'surname' => $array['member1']['surname'] ,'email' => $array['member1']['email']],
                'member 2' => ['name' => $array['member2']['name'], 'surname' => $array['member2']['surname'] ,'email' => $array['member2']['email']],
                'member 3' => ['name' => $array['member3']['name'], 'surname' => $array['member3']['surname'] ,'email' => $array['member3']['email']]
            ], 'points' => 0
        ]);
        var_dump('Succesfully inserted data!');
}
?>