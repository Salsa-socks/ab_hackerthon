<?php
    include ('./database.php');
    $teams = db_retrieve_teams('Teams');
    //print_r($teams);
?>
    <table style="width:100%">
    <tr>
      <td>TEAM</td>
      <td>POINTS</td>
      <td>CHALLENGES</td>
    </tr>
    <?php foreach ($teams as $key => $value){ ?>
    <tr>
      <?php
              foreach ($value as $key1 => $value1)
              {
                  if ($key1 == 'Team name')
                  {
      ?>
                      <td><?php echo $value1;?></td>
      <?php
                  }
                  if ($key1 == 'points')
                  {
      ?>
                      <td><?php echo $value1;?></td>
      <?php
                  }
              }    
      ?>
      <?php } ?>
      </tr>
  </table>