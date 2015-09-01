<?php
    require_once('lolelf_dbobj.php');
    class participant_stats extends lolelf_dbobj {
        function __construct() {
            $this->table_name = 'participantStats';
            $this->all_fields = array('assists' => 'int',
                                      'champLevel' => 'int',
                                      'combatPlayerScore' => 'int',
                                      'deaths' => 'int',
                                      'doubleKills' => 'int',
                                      'firstBloodAssist' => 'boolean',
                                      'firstBloodKill' => 'boolean',
                                      'firstInhibitorAssist' => 'boolean',
                                      'firstInhibitorKill' => 'boolean',
                                      'firstTowerAssist' => 'boolean',
                                      'firstTowerKill' => 'boolean',
                                      'goldEarned' => 'int',
                                      'goldSpent' => 'int',
                                      'inhibitorKills' => 'int',
                                      'item0' => 'int',
                                      'item1' => 'int',
                                      'item2' => 'int',
                                      'item3' => 'int',
                                      'item4' => 'int',
                                      'item5' => 'int',
                                      'item6' => 'int',
                                      'killingSprees' => 'int',
                                      'kills' => 'int',
                                      'largestCriticalStrike' => 'int',
                                      'largestKillingSpree' => 'int',
                                      'largestMultiKill' => 'int',
                                      'magicDamageDealt' => 'int',
                                      'magicDamageDealtToChampions' => 'int',
                                      'magicDamageTaken' => 'int',
                                      'minionsKilled' => 'int',
                                      'neutralMinionsKilled' => 'int',
                                      'neutralMinionsKilledEnemyJungle' => 'int',
                                      'neutralMinionsKilledTeamJungle' => 'int',
                                      'nodeCapture' => 'int',
                                      'nodeCaptureAssist' => 'int',
                                      'nodeNeutralize' => 'int',
                                      'nodeNeutralizeAssist' => 'int',
                                      'objectivePlayerScore' => 'int',
                                      'pentaKills' => 'int',
                                      'physicalDamageDealt' => 'int',
                                      'physicalDamageDealtToChampions' => 'int',
                                      'physicalDamageTaken' => 'int',
                                      'quadraKills' => 'int',
                                      'sightWardsBoughtInGame' => 'int',
                                      'teamObjective' => 'int',
                                      'totalDamageDealt' => 'int',
                                      'totalDamageDealtToChampions' => 'int',
                                      'totalDamageTaken' => 'int',
                                      'totalHeal' => 'int',
                                      'totalPlayerScore' => 'int',
                                      'totalScoreRank' => 'int',
                                      'totalTimeCrowdControlDealt' => 'int',
                                      'totalUnitsHealed' => 'int',
                                      'towerKills' => 'int',
                                      'tripleKills' => 'int',
                                      'trueDamageDealt' => 'int',
                                      'trueDamageDealtToChampions' => 'int',
                                      'trueDamageTaken' => 'int',
                                      'unrealKills' => 'int',
                                      'visionWardsBoughtInGame' => 'int',
                                      'wardsKilled' => 'int',
                                      'wardsPlaced' => 'int',
                                      'winner' => 'boolean',
                                      'reference_id' => 'reference_id',
                                      'reference_type' => 'reference_type',
                                      'reference_field' => 'reference_field');
            $this->non_empty_fields = array();
            $this->obj_field_map = array();
        }
    }
?>