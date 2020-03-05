<?php
    include ('./database.php');
    $db = new Database();

    $teams = $db->fetch_teams();
    $array_count = count($teams);
    $team_collection = [];
    
    //email related topics
  
      if ($array_count > 0)
      {
      foreach ($teams as $key => $value)
      {
        $team_name = $key;
        foreach($value as $key1 => $value1)
        {
          if ($key1 == 'Points')
          {
            $team_collection = array_merge($team_collection, [$team_name => $value1]);
          }
        }
      }
      arsort($team_collection);
      }
?>
    <table style="width:100%;">
    <tr>
      <td>TEAM</td>
      <td>POINTS</td>
    </tr>
    <?php
    if ($array_count > 0)
    {
      foreach ($team_collection as $key => $value)
      {
    ?>
    <tr>
                    <td><?php echo $key;?></td>
                    <td><?php echo $value;?></td>
    </tr>
    <?php
      }
    }
    ?>
  </table>