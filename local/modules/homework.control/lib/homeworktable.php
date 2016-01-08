<?php
namespace HOMEWORK\HOMEWORKCONTROL;

use Bitrix\Main\Application;
use Bitrix\Main\Entity;
use Bitrix\Main\Entity\Event;
use Bitrix\Main\Localization\Loc;
use Bitrix\Iblock\ElementTable;
use Bitrix\Main\UserTable;

Loc::loadMessages(__FILE__);

class HomeworkTable extends Entity\DataManager
{
    public static function getFilePath()
    {
        return __FILE__;
    }

    /*Название таблицы HL в БД*/
    public static function getTableName()
    {
        return 'homework_db';
    }

    /*Описание полей сущности (соответсвуют полям )*/
    public static function getMap()
    {
        return array(
            'UF_ID' => array(
                'data_type' => 'integer',
                'primary' => true,
                'autocomplete' => true,
                'title' => Loc::getMessage('HOMEWORK_ID')
            ),
            'UF_STUDENT_ID' => array(
                'data_type' => 'integer',
                'required' => true,
                'title' => Loc::getMessage('HOMEWORK_STUDENT_ID')
            ),
            'UF_TASK' => array(
                'data_type' => 'string',
                'required' => true,
                'title' => Loc::getMessage('HOMEWORK_TASK')
            ),
            'UF_SUBJECT_ID' => array(
                'data_type' => 'integer',
                'required' => true,
                'title' => Loc::getMessage('HOMEWORK_SUBJECT_ID'),
            ),
            new Entity\ReferenceField(
                'UF_STUDENT_ID',
                'Bitrix\Main\UserTable',
                array('=this.UF_STUDENT_ID' => 'ref.ID')
            ),
            new Entity\ReferenceField(
                'UF_SUBJECT_ID',
                'Bitrix\Main\UserTable',
                array('=this.UF_SUBJECT_ID' => 'ref.ID')
            ),
        );
    }

    public static function validateValue()
    {
        return array(
            new Entity\Validator\Range(0, null, false, array("MIN" => "Количество должно быть больше нуля")),
        );
    }
}
?>