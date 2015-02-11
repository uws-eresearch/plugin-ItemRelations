<?php
/**
 * Omeka
 * 
 */

/**
 * 
 * 
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
        
        /*
        $request = $this->getRequest();
        $recordType = $request->getParam('api_record_type');
        $resource = $request->getParam('api_resource');
        $page = $request->getQuery('page', 1);
        
        $this->_validateRecordType($recordType);
        
        // Determine the results per page.
        $perPageMax = (int) get_option('api_per_page');
        $perPageUser = (int) $request->getQuery('per_page');
        $perPage = ($perPageUser < $perPageMax && $perPageUser > 0) ? $perPageUser : $perPageMax;
        
        // Get the records and the result count.
        $recordsTable = $this->_helper->db->getTable($recordType);
        $totalResults = $recordsTable->count($_GET);
        $records = $recordsTable->findBy($_GET, $perPage, $page);
        
        // Set the non-standard Omeka-Total-Results header.
        $this->getResponse()->setHeader('Omeka-Total-Results', $totalResults);
        
        // Set the Link header for pagination.
        $this->_setLinkHeader($perPage, $page, $totalResults, $resource);
        
        // Build the data array.
        $data = array();
        $recordAdapter = $this->_getRecordAdapter($recordType);
        foreach ($records as $record) {
            $data[] = $this->_getRepresentation($recordAdapter, $record, $resource);
        }
        
        $this->_helper->jsonApi($data);
        */
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
        
        $db = $this->_helper->db->getTable('element_texts');
        $select = $db->getSelect();
        $select->distinct()->columns(array(
            'record_id', 'text',
        ))->where("(element_id=50 OR element_id=52) AND record_type='Item' AND TEXT LIKE ?", '%'. $apiParams[0]. '%');
        
        $data = $db->fetchAll($select);
        
      /*
        $record = $this->_helper->db->getTable('Item')->find($apiParams[0]);
        if (!$record) {
            throw new Omeka_Controller_Exception_Api('Invalid record. Record not found.', 404);
        }
        
        // The user must have permission to show this record.
//        $this->_validateUser($record, 'show');
        
        $data = $this->_getRepresentation($this->_getRecordAdapter($recordType), $record, $resource);
*/
        $this->_helper->jsonApi($data);

    }
}