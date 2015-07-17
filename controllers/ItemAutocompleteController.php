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
        
        // reserve access for logged-in users
        if (! current_user())
        {
            throw new Omeka_Controller_Exception_403();
        }

        $params = $request->getParams();
        
        if (empty($params['term']) || empty($params['elementid']))
        {
            header("HTTP/1.0 400 Bad Request");
            die('Argh!  Need a search term and an element id');
        }
        
        $db = $this->_helper->db->getTable("element_texts");

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
     
        //  work out which DC element_ids to look up ppl instead of things
        $sql = "
            SELECT id FROM omeka_elements WHERE name IN ('contributor', 'creator', 'publisher') and element_set_id = 1;
";
        $people_element_ids = $db->getTable('Element')->fetchAll($sql);
        
        //  determine element_id for DC Title
        $sql = "
            SELECT id FROM omeka_elements WHERE name='Title' and element_set_id = 1;
";
        $title_id = $db->getTable('Element')->fetchOne($sql);

        //  determine element_id for DC Alt Title
        $sql = "
            SELECT id FROM omeka_elements WHERE name='Alternative Title' and element_set_id = 1;
";
        $alt_title_id = $db->getTable('Element')->fetchOne($sql);

       
        // if DC field is a person, limit results to people...
        if (!empty($params['elementid']) && in_array($params['elementid'], $people_element_ids[0]))    // contributor, creator, publisher
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
                WHERE           et1.element_id={$title_id}
                    AND         et1.record_type='Item'
                    AND         et2.record_type='Item'
                    AND         (et2.element_id IN ($title_id, $alt_title_id))
                    AND         et2.text LIKE ?
                    AND         it.name = 'Person'";

            $data = $db->getTable('Element')->fetchObjects($sql, array('%'. $params['term'] . '%'));
        }
        else
        {
            $sql = "
                SELECT DISTINCT et1.record_id, et1.text
                FROM            {$fullname_element_texts} et1
                INNER JOIN      {$fullname_element_texts} et2
                    ON et1.record_id = et2.record_id
                WHERE           et1.element_id={$title_id}
                    AND         et1.record_type='Item'
                    AND         et2.record_type='Item'
                    AND         (et2.element_id IN ($title_id, $alt_title_id))
                    AND         et2.text LIKE ?";

            $data = $db->getTable('Element')->fetchObjects($sql, array('%'. $params['term'] . '%'));
        }        

        $output = array();
        foreach ($data as $datum)
        {
            $tmp_out = array();
            $tmp_out['id'] = $datum['record_id'];
            $tmp_out['label'] = $datum['text'];
            $output[] = $tmp_out;
        }
        
        echo json_encode( $output );

//        print_r($data);
//        $this->_helper->jsonApi($data);
    }
}