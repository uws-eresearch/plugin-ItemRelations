<p>
<?php
$link = '<a href="' . url('item-relations/vocabularies/') . '">'
      . __('Browse Vocabularies') . '</a>';

echo __('Here you can relate this item to another item and delete existing '
     . 'relations. For descriptions of the relations, see the %s page. Invalid '
     . 'item IDs will be ignored.', $link
);
?>
</p>
<table>
    <thead>
    <tr>
        <th><?php echo __('Subject'); ?></th>
        <th><?php echo __('Relation'); ?></th>
        <th><?php echo __('Object'); ?></th>
        <th><?php echo __('Delete'); ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($subjectRelations as $subjectRelation): ?>
    <tr>
        <td><?php echo __('This Item'); ?></td>
        <td><?php echo $subjectRelation['relation_text']; ?></td>
        <td><a href="<?php echo url('items/show/' . $subjectRelation['object_item_id']); ?>" target="_blank"><?php echo $subjectRelation['object_item_title']; ?></a></td>
        <td><input type="checkbox" name="item_relations_item_relation_delete[]" value="<?php echo $subjectRelation['item_relation_id']; ?>" /></td>
    </tr>
    <?php endforeach; ?>
    <?php foreach ($objectRelations as $objectRelation): ?>
    <tr>
        <td><a href="<?php echo url('items/show/' . $objectRelation['subject_item_id']); ?>" target="_blank"><?php echo $objectRelation['subject_item_title']; ?></a></td>
        <td><?php echo $objectRelation['relation_text']; ?></td>
        <td><?php echo __('This Item'); ?></td>
        <td><input type="checkbox" name="item_relations_item_relation_delete[]" value="<?php echo $objectRelation['item_relation_id']; ?>" /></td>
    </tr>
    <?php endforeach; ?>
    <tr class="item-relations-entry">
        <td><?php echo __('This Item'); ?></td>
        <td><?php echo get_view()->formSelect('item_relations_property_id[]', null, array('multiple' => false), $formSelectProperties); ?></td>
        <td>
            <input type="hidden" name="item_relations_item_relation_object_item_id[]" id="item_relations_item_relation_object_item_id0">
            <div class="ui-widget">
                <label for="items"><?php echo __('Related Item'); ?></label>
                <input id="item_relations_item_relation_object_item_search0">
            </div>
        </td>
        <td><span style="color:#ccc;">n/a</span></td>
    </tr>
    </tbody>
</table>
<button type="button" class="item-relations-add-relation"><?php echo __('Add a Relation'); ?></button>
<input type="hidden" name="row_count_id" value="0">
    
<script type="text/javascript">
jQuery(document).ready(function () {
    jQuery('.item-relations-add-relation').click(function () {
        var oldRow = jQuery('.item-relations-entry').last();
        var newRow = oldRow.clone();
        oldRow.after(newRow);
        var inputs = newRow.find('input, select');
        inputs.val('');

        jQuery('input[name=row_count_id]').val( parseInt( jQuery('input[name=row_count_id]').val()) + 1 );
        
        var rowid = jQuery('input[name=row_count_id]').val()
        inputs[0].id = inputs[0].id.replace(/[0-9]/g, '');
        inputs[1].id = inputs[1].id.replace(/[0-9]/g, '');
        inputs[2].id = inputs[2].id.replace(/[0-9]/g, '');

        inputs[0].id += jQuery('input[name=row_count_id]').val();
        inputs[1].id += jQuery('input[name=row_count_id]').val();
        inputs[2].id += jQuery('input[name=row_count_id]').val();
        
        jQuery(function() {
            jQuery("#item_relations_item_relation_object_item_search" + rowid).autocomplete({
               minLength: 2,
               select: function( event, ui ) {
                  jQuery('input[id=item_relations_item_relation_object_item_id' + rowid + ']').val(ui.item.id);
/*                  alert( ui.item ?
                  "Selected: " + ui.item.id + " aka " + ui.item.label :
                  "Nothing selected, input was " + this.value ); */
               },
               source: function(request, response) {
                    jQuery.ajax({
                        url: '/item-relations/item-autocomplete/get/term/' + request.term + (jQuery('#item_relations_property_id' + rowid).val() == undefined ? '' : '/elementid/' + jQuery('#item_relations_property_id' + rowid).val()),
                        dataType: "json",
                        data: {
                            // q: request.term
                        },
                        cache: true,
                        success: function(data) {
                           response( data );
                        }
                    })
                }
            });
        });
    });
});

    jQuery(function() {
        jQuery("#item_relations_item_relation_object_item_search0").autocomplete({
           minLength: 2,
           select: function( event, ui ) {
              jQuery('input[id=item_relations_item_relation_object_item_id0]').val(ui.item.id);
/*              alert( ui.item ?
              "Selected: " + ui.item.id + " aka " + ui.item.label :
              "Nothing selected, input was " + this.value ); */
           },
           source: function(request, response) {
                jQuery.ajax({
                   url: '/item-relations/item-autocomplete/get/term/' + request.term + (jQuery('#item_relations_property_id').val() == undefined ? '' : '/elementid/' + jQuery('#item_relations_property_id').val()),
                    dataType: "json",
                    data: {
                        // q: request.term
                    },
                    cache: true,
                    success: function(data) {
                       response( data );
                    }
                })
            }
        });
    });
</script>
