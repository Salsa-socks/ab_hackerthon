<?php

require_once 'vendor/autoload.php';

use Kreait\Firebase\Factory;

function db_structure($team_name, array $member_1, array $member_2, array $member_3, array $member_4, array $member_5)
{
    $teamInfo = ['Team name' => $team_name, 'Members' => [
        'member 1' => $member_1,
        'member 2' => $member_2,
        'member 3' => $member_3,
        'member 4' => $member_4,
        'member 5' => $member_5
        ], 'points' => 0
    ];
    return $teamInfo;
}

function db_insert(array $array)
{
    $factory = new Factory();
    $database = $factory->withServiceAccount(__DIR__.'/secret/practice-f9c1b-067f82e56870.json')->createDatabase();        
   
    $newPost =$database->getReference('Teams')->push($array);
    /*$newPost =$database->getReference('Teams')->push(
        ['Team name' => $array['team_name'], 'Members' => [
                'member 1' => ['name' => $array['member1']['name'], 'surname' => $array['member1']['surname'] ,'email' => $array['member1']['email']],
                'member 2' => ['name' => $array['member2']['name'], 'surname' => $array['member2']['surname'] ,'email' => $array['member2']['email']],
                'member 3' => ['name' => $array['member3']['name'], 'surname' => $array['member3']['surname'] ,'email' => $array['member3']['email']]
            ], 'points' => 0
        ]);*/
        var_dump('Succesfully inserted data!');
}

function db_retrieve_teams($reference) {
    $factory = new Factory();
    $database = $factory->withServiceAccount(__DIR__.'/secret/practice-f9c1b-067f82e56870.json')->createDatabase();        
    $snap = $database->getReference($reference)->getValue();

    return $snap;
}

function db_retrieve_team_item ()
{

}

function db_retrieve_team($reference, $team_name) 
{
    $factory = new Factory();
    $database = $factory->withServiceAccount(__DIR__.'/secret/practice-f9c1b-067f82e56870.json')->createDatabase();        
    $snap = $database->getReference($reference)->getValue();
    foreach ($snap as $key => $value)
    {
        foreach ($value as $key1 => $value1)
        {
            if ($key1 == 'Team name')
            {
                if ($value1 == $team_name)
                {
                    $team = $value;
                }
            }
        }
    }
    return $team;
}
?>