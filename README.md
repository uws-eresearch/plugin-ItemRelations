Omeka Plugin: ItemRelations
====================

This fork of the Omeka ItemRelations plugin adds the following:

* An API, to allow relations to be applied by external scripts
* Autocomplete of item titles added to object in edit Item Relations admin page.  Previously required manual ID entry of the object.  It calls 
   ```GET /item-relations/item-autocomplete/get/term/:term/:element_id```
  where :element_id is optional and limits the responses to item_type 12 (people) when set to 22, 24 or 35 (contributor, creator, publisher)
* New human-readable labels for relation so reduce ambiguity (eg with dc:creator it is hard to tell which item is meant to have created which) via "friendly" versions of DC related terms.  These can be edited in the formal_vocabularies.php file (before installing the plugin).  They are enabled by choosing "Configure" for Item Relations in the list of plugins in the admin area then selecting "friendlyPart" for the Relation Format option.

# API

/api/item\_relations #List all ItemRelationsRelations

/api/item\_relations/1 #Get ItemRelationsRelations with id = 1

GET, POST  /api/item_relations_vocabularies

GET, PUT, DELETE /api/item_relations_vocabularies/:id

GET, POST  /api/item_relations_properties

GET, PUT, DELETE /api/item_relations_properties/:id






