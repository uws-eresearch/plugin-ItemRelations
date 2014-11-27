<?php


class Api_ItemRelationsRelation extends Omeka_Record_Api_AbstractRecordAdapter
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
	//echo "data";
	//echo var_dump($data);
	//echo $data -> subject_item_id;
        // Set properties directly to a new record.a
	$record->subject_item_id = $data->subject_item_id; 	
        $record->object_item_id = $data->object_item_id;
	$record->property_id =  $data->property_id;
    }

    // Set data to a record during a PUT request.
    public function setPutData(Omeka_Record_AbstractRecord $record, $data)
    {
        // Set properties directly to an existing record.

        $record->subject_item_id = $data->subject_item_id;
        $record->object_item_id = $data->object_item_id;
        $record->property_id =  $data->property_id;
    }
}
