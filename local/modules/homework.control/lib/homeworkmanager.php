<?php
namespace HOMEWORK\HOMEWORKCONTROL;

use Bitrix\Main\Application;
use Bitrix\Main\Entity;
use Bitrix\Main\Entity\Event;
use Bitrix\Main\Localization\Loc;
use Bitrix\Iblock\ElementTable;
use Bitrix\Main\UserTable;

Loc::loadMessages(__FILE__);

class HomeworkManager
{
    public static function AddHomework($student, $task, $subject)
    {
        if(!$student || !$task || !$subject )
        {
            return false;
        }

        return HomeworkTable::add(
            array
            (
                'UF_STUDENT_ID' => $student,
                'UF_TASK' => $task,
                'UF_SUBJECT_ID' => $subject
            ))->isSuccess();
    }
}
?>