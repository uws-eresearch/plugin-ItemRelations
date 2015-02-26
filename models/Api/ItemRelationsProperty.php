<?php
//GET only implementation to start with - will want to be able POST and PUT as well

class Api_ItemRelationsProperty extends Omeka_Record_Api_AbstractRecordAdapter
{
    // Get the REST representation of a record.
    public function getRepresentation(Omeka_Record_AbstractRecord $record)
    {   
	 return $record;
        // Return a PHP array, representing the passed record.
    }

        // Set data to a record during a POST request.
    public function setPostData(Omeka_Record_AbstractRecord $record, $data)
    {
        // foreign key integrity check for vocab id
        if (get_db()->getTable('ItemRelationsVocabulary')->find($data->vocabulary_id))
        {
            $record->vocabulary_id     = $data->vocabulary_id;
            $record->local_part        = $data->local_part;
            $record->label             = $data->label;
            $record->description       = $data->description;
        }
        else throw new Omeka_Controller_Exception_Api('Invalid record. Vocabulary record not found.', 404);
    }

    // Set data to a record during a PUT request.
    public function setPutData(Omeka_Record_AbstractRecord $record, $data)
    {
        $this->setPostData($record, $data);
    }
}
