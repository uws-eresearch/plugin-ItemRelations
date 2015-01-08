<?php
//GET only implementation to start with - will want to be able POST and PUT as well

class Api_ItemRelationsVocabulary  extends Omeka_Record_Api_AbstractRecordAdapter
{
    // Get the REST representation of a record.
    public function getRepresentation(Omeka_Record_AbstractRecord $record)
	    {   
	 return $record;
        // Return a PHP array, representing the passed record.
    }

}
