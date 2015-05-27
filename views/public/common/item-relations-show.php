<div id="item-relations-display-item-relations">
    <h2><?php echo __('Item Relations'); ?></h2>
    <?php if (!$subjectRelations && !$objectRelations): ?>
    <p><?php echo __('This item has no relations.'); ?></p>
    <?php else: ?>
    <table>
        <?php foreach ($subjectRelations as $term => $subjectRelation): ?>
        <tr>
            <td valign='top'><?php echo __('This Item'); ?></td>
            <td valign='top'><span title="<?php echo html_escape($subjectRelation['relation_description']); ?>"><?php echo $term; ?></span></td>
            <td valign='top'>
            <?php $i = 0; foreach ($subjectRelation as $relation): ?>
                Item: <a href="<?php echo url('items/show/' . $relation['object_item_id']); ?>"><?php echo $relation['object_item_title']; ?></a><br>
            <?php
                ++$i;
                if ($i == 2 && count($subjectRelation) > 2)
                {
                    echo "<div id='vis-subj-{$term}' style='display: none;'>";
                }
                
                endforeach;
                
                if (count($subjectRelation) > 2)
                {
                    echo <<<EOB
                    </div>
                    <div id='showmore-subj-{$term}'>
                        <a href='javascript:;' onclick='document.getElementById("vis-subj-{$term}").style.display="block"; document.getElementById("showless-subj-{$term}").style.display="block"; document.getElementById("showmore-subj-{$term}").style.display="none";'>See more...</a>
                    </div>
                    <div id='showless-subj-{$term}' style='display: none;'>
                        <a href='javascript:;' onclick='document.getElementById("vis-subj-{$term}").style.display="none"; document.getElementById("showmore-subj-{$term}").style.display="block"; document.getElementById("showless-subj-{$term}").style.display="none";'>See fewer...</a>
                    </div>
EOB;
                }
            ?>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php foreach ($objectRelations as $term => $objectRelation): ?>
        <tr>
            <td valign='top'>
            <?php
                foreach ($objectRelation as $relation): 
            ?>
                Item: <a href="<?php echo url('items/show/' . $relation['subject_item_id']); ?>"><?php echo $relation['subject_item_title']; ?></a><br>
            <?php
                    ++$i;
                    if ($i == 2 && count($objectRelation) > 2)
                    {
                        echo "<div id='vis-obj-{$term}' style='display: none;'>";
                    }
                endforeach;
                
                if (count($objectRelation) > 2)
                {
                    echo <<<EOB
                    </div>
                    <div id='showmore-obj-{$term}'>
                        <a href='javascript:;' onclick='document.getElementById("vis-obj-{$term}").style.display="block"; document.getElementById("showless-obj-{$term}").style.display="block"; document.getElementById("showmore-obj-{$term}").style.display="none";'>See more...</a>
                    </div>
                    <div id='showless-obj-{$term}' style='display: none;'>
                        <a href='javascript:;' onclick='document.getElementById("vis-obj-{$term}").style.display="none"; document.getElementById("showmore-obj-{$term}").style.display="block"; document.getElementById("showless-obj-{$term}").style.display="none";'>See fewer...</a>
                    </div>
EOB;
                }
            ?>
            </td>
            <td valign='top'><span title="<?php echo html_escape($objectRelation['relation_description']); ?>"><?php if (isset($objectRelation['relation_text'])) echo $objectRelation['relation_text']; ?><?php echo $term; ?></span></td>
            <td valign='top'><?php echo __('This Item'); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>
</div>
