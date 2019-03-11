<?php require("db.php");

function getSurveys()
{
    global $db;
    $query = $db->prepare("SELECT * FROM poll");
    $query->execute();
    $result = $query->fetchAll();
    return $result;
}

function getOneSurvey($survey)
{
    global $db;
    $query = $db->prepare("SELECT * FROM poll WHERE id=?");
    $query->execute(array($survey));
    $row = $query->fetch();
    return $row;
}

function updateHits($survey, $hits)
{
    global $db;
    $query = $db->prepare("UPDATE poll SET hits=? WHERE id=?");
    $update = $query->execute(array($hits, $survey));
    if ($update)
        return 1;
    else
        return 0;
}

function vote($survey, $option)
{
    $survey = getOneSurvey($survey);
    $hitsA = array_map("intval", explode(";", $survey['hits']));
    $n = $hitsA[$option] += 1;
    $hitsA[$option] = $n;
    $hitsS = implode(";", $hitsA);
    $success = updateHits($survey["id"], $hitsS);
    return $success;
}

function percent($hits, $target)
{
    $target = intval($target);
    $sum = 0;
    foreach($hits as $hit)
        $sum += $hit;
    return floor($target/$sum*100);
}