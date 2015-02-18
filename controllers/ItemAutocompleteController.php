<?php
/**
 * Omeka
 * 
 */

class ItemRelations_ItemAutocompleteController extends Omeka_Controller_AbstractActionController
{
    /**
     * Initialize this controller.
     */
    public function init()
    {
        // Actions should use the jsonApi action helper to render JSON data.
        $this->_helper->viewRenderer->setNoRender();
    }
    
        /**
     * Handle GET request without ID.
     */
    public function indexAction()
    {

    }
    
        /**
     * Handle GET request with ID.
     */
    public function getAction()
    {
        $request = $this->getRequest();
//        $recordType = $request->getParam('api_record_type');
        $resource = $request->getParam('api_resource');
        $apiParams = $request->getParam('api_params');
        
        $term = $apiParams[0];
        $dcfieldid = empty($apiParams[1]) ? null : $apiParams[1];
        
        $db = $this->_helper->db->getTable("element_texts");
/*
SELECT DISTINCT et1.record_id, et1.text FROM omeka_element_texts et1 INNER JOIN omeka_element_texts et2 ON et1.record_id = et2.record_id WHERE et1.element_id=50 and et1.record_type="Item" and et2.record_type="Item" AND (et2.element_id = 50 or et2.element_id = 52) AND et2.text LIKE '%mullet%';
*/
/*
        $bootstrap = Zend_Registry::get('bootstrap');
        $currentUser = $bootstrap->getResource('CurrentUser');
        $acl = $bootstrap->getResource('Acl');
*/
        
       
        $fullname_element_texts = $db->getTableName('element_texts');
        $fullname_elements = $db->getTablePrefix(). 'elements';
        $fullname_item_types_elements = $db->getTablePrefix(). 'item_types_elements';
        $fullname_item_types = $db->getTablePrefix(). 'item_types';

     //   $select = $db->getSelect();

        // if DC field is a person, limit results to people...
        if (in_array($dcfieldid, array(22, 24, 35)))    // contributor, creator, publisher
        {
            $sql = "
                SELECT DISTINCT et1.record_id, et1.text
                FROM            {$fullname_element_texts} et1
                INNER JOIN      {$fullname_element_texts} et2
                    ON et1.record_id = et2.record_id
                        INNER JOIN  omeka_items i
                            ON et2.record_id = i.id
                                    INNER JOIN	omeka_item_types it
                                        on i.item_type_id = it.id
                WHERE           et1.element_id=50
                    AND         et1.record_type='Item'
                    AND         et2.record_type='Item'
                    AND         (et2.element_id = 50 or et2.element_id = 52)
                    AND         et2.text LIKE ?
                    AND         it.id = 12";    //  12 = Person

            $data = $db->getTable('Element')->fetchObjects($sql, array('%'. $term . '%'));
        }
        else
        {
            $sql = "
                SELECT DISTINCT et1.record_id, et1.text
                FROM            {$fullname_element_texts} et1
                INNER JOIN      {$fullname_element_texts} et2
                    ON et1.record_id = et2.record_id
                WHERE           et1.element_id=50
                    AND         et1.record_type='Item'
                    AND         et2.record_type='Item'
                    AND         (et2.element_id = 50 or et2.element_id = 52)
                    AND         et2.text LIKE ?";

            $data = $db->getTable('Element')->fetchObjects($sql, array('%'. $term . '%'));
        }        

        $output = array();
        foreach ($data as $datum)
        {
            $tmp_out = array();
            $tmp_out['id'] = $datum['record_id'];
            $tmp_out['label'] = $datum['text'];
            $output[] = $tmp_out;
        }
        
        if (!empty($_GET['callback']))
            echo $_GET['callback']. '=';
            
        echo json_encode( $output );

//        print_r($data);
//        $this->_helper->jsonApi($data);
    }
}