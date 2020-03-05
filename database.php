<?php

require_once 'vendor/autoload.php';

use Kreait\Firebase\Factory;

class Database 
{
    public $database;
    public function __construct()
    {
        $factory = new Factory();
        $firebase = $factory->withServiceAccount(__DIR__.'/secret/practice-f9c1b-067f82e56870.json')->create();    
        
        $this->database = $firebase->getDatabase();
    }
    public function insertingData($teamName, array $member_1, array $member_2, array $member_3, array $member_4, array $member_5)
    {
        $data = array('teamName' => $teamName,'Members' => [
            'member 1' => $member_1,
            'member 2' => $member_2,
            'member 3' => $member_3,
            'member 4' => $member_4,
            'member 5' => $member_5
        ], 
        'Points' => 0
        );
        $reference = $this->database->getReference('all/teams/'.$teamName);
        $reference->set($data);
    }
    public function fetchingTeam($teamName)
    {
        $reference = $this->database->getReference('all/teams/'.$teamName);
        return $reference->getValue();
    }
    public function teamName($teamName)
    {
        $reference = $this->database->getReference('all/teams/'.$teamName);
        return $reference->getSnapshot()->getChild('teamName')->getValue();
    }
    public function updatingPoints($teamName, $point)
    {
        $reference = $this->database->getReference('all/teams/'.$teamName);
        $reference->getChild('Points')->set($point);
        // $reference->getChild('.indexOn')->set($point);
    }
    public function fetch_Teams()
    {
        $reference = $this->database->getReference('all');
        return $reference->getChild('teams')->getValue();
    }
    public function displayPoints()
    {
        $reference = $this->database->getReference('teams');
    }
}
?>