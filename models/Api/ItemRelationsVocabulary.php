<?php
//GET only implementation to start with - will want to be able POST and PUT as well

class Api_ItemRelationsVocabulary extends Omeka_Record_Api_AbstractRecordAdapter
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
//        print_r($data);
        
        $record->name              = $data->name;
        $record->description       = $data->description;
        $record->namespace_prefix  = $data->namespace_prefix;
        $record->namespace_uri     = $data->namespace_uri;
        
        if (isset($data->custom)) {
            $record->custom = $data->custom;
        }
    }

    // Set data to a record during a PUT request.
    public function setPutData(Omeka_Record_AbstractRecord $record, $data)
    {
        $this->setPostData($record, $data);
        
//        print_r($data);
//          {"id":5,"name":"Custom!","description":"Custom vocabulary containing relations defined for this Omeka instance.","namespace_prefix":"","namespace_uri":null,"custom":1}
        
        /*
        // Set properties directly to an existing record.
        $record->subject_item_id = $data->subject_item_id;
        $record->object_item_id = $data->object_item_id;
        $record->property_id =  $data->property_id;
        */
    }
}
