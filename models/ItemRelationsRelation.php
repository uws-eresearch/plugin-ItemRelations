<?php
/**
 * Item Relations
 * @copyright Copyright 2010-2014 Roy Rosenzweig Center for History and New Media
 * @license http://www.gnu.org/licenses/gpl-3.0.txt GNU GPLv3
 */

/**
 * Item Relations Relation model.
 */
class ItemRelationsRelation extends Omeka_Record_AbstractRecord  implements Zend_Acl_Resource_Interface
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $subject_item_id;

    /**
     * @var int
     */
    public $property_id;

    /**
     * @var int
     */
    public $object_item_id;
   protected function _validate()
    {
        //echo "Validating";
	if (empty($this->subject_item_id)) {
            $this->addError('subject_item_id', __('Relation requires subject item ID.'));
        }
        // An item must exist.
        if (!$this->getTable('Item')->exists($this->subject_item_id)) {
            $this->addError('subject_item_id', __('Relation requires a valid subject  item ID.'));
        }
    }

    /**
     * Get a textual representation of the property for this relation.
     *
     * @uses ItemRelationsProperty::getText()
     * @return string
     */
    public function getPropertyText()
    {
        $property = new ItemRelationsProperty;
        $property->local_part = $this->property_local_part;
        $property->label = $this->property_label;
        $property->vocabulary_namespace_prefix = $this->vocabulary_namespace_prefix;
        return $property->getText();
    }
    /**
    /* Identify ItemRelationsRelation records as relating to the ItemRelationsRelations ACL resource.
     *
     * @return string
     */
    public function getResourceId()
    {
        return 'Relations';
    }

}
