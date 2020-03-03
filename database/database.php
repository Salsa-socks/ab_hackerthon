<?php

require_once '../vendor/autoload.php';

use Kreait\Firebase\Factory;

class Database
{
    private $database;
    // private $factory;

    public function create()
    {
        $factory = new Factory();
        $this->database = $factory->withServiceAccount('../secret/ab-hackerathon-1923f11ce9fd')->createDatabase();        
    }

    public function insert(array $array)
    {
        $newPost = $this->database->getReference('Teams')->push(
            ['Team name' => $array['team_name'],'Password' => 'blah blah blah blah','Members' => [
                'member 1' => ['name' => $array['member1']['name'], 'surname' => $array['member1']['surname'] ,'email' => $array['member1']['email']],
                'member 2' => ['name' => $array['member2']['name'], 'surname' => $array['member2']['surname'] ,'email' => $array['member2']['email']],
                'member 3' => ['name' => $array['member3']['name'], 'surname' => $array['member3']['surname'] ,'email' => $array['member3']['email']]
            ], 'points' => 0
        ]);
        var_dump('Succesfully inserted data!');
    }
}
?>