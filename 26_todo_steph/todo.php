<?php
    Class TaskBoard{
        public $taskTab = [];
        public function addTaskTotaskTab($task){
            $this->taskTab[] = $task;
        }
        public function seeAllTask(){
            echo 'Liste des taches : <pre>';
            print_r($this->taskTab);
            echo '</pre>';
        }
    }

    Class Task{
        public $task = '';
        public $show = true;
        public function __construct($task){
            $this->task = $task;
        }
        public function seeTheTask(){
            echo $this->task.'<br />';
        }
    }

    $tache1 = new Task('je suis une tache 1');
    $tache1->seeTheTask();
    $tache1->show = false;

    $tache2 = new Task('je suis une tache 2');
    $tache2->seeTheTask();

    $mesTaches = new TaskBoard();
    $mesTaches->addTaskTotaskTab($tache1);
    $mesTaches->addTaskTotaskTab($tache2);
    $mesTaches->seeAllTask();