<?php

$dbhost = "h911254154.mysql";
$dbname = "h911254154_vosvetebible";
$username = "h911254154_mysql";
$password = "y:ue3TVJ";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname",  $username, $password);
$db->query("SET NAMES 'utf8'");

function get_questions() {
  global $db;
  $questions = $db->query("SELECT * FROM questions");
  return $questions;
}

function get_topic_id($id) {
  global $db;
  $question_topics = $db->query("SELECT * FROM question_topics WHERE topic_id = $id");
  foreach ($question_topics as $topic_name) {
    return $topic_name["topic_name"];
  }
}

function get_all_topics() {
  global $db;
  $topics = $db->query("SELECT * FROM question_topics");
  return $topics;
}
