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
        
        $db = $this->_helper->db->getTable("element_texts");
/*
SELECT DISTINCT et1.record_id, et1.text FROM omeka_element_texts et1 INNER JOIN omeka_element_texts et2 ON et1.record_id = et2.record_id WHERE et1.element_id=50 and et1.record_type="Item" and et2.record_type="Item" AND (et2.element_id = 50 or et2.element_id = 52) AND et2.text LIKE '%mullet%';
*/
        $full_table_name = $db->getTableName('element_texts');

     //   $select = $db->getSelect();

        $sql = "
            SELECT DISTINCT et1.record_id, et1.text
            FROM            {$full_table_name} et1
            INNER JOIN      {$full_table_name} et2
                ON et1.record_id = et2.record_id
            WHERE           et1.element_id=50
                AND         et1.record_type='Item'
                AND         et2.record_type='Item'
                AND         (et2.element_id = 50 or et2.element_id = 52)
                AND         et2.text LIKE ?";

        $data = $db->getTable('Element')->fetchObjects($sql, array('%'. $apiParams[0]. '%'));

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