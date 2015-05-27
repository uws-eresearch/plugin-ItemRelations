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
            <td>
            <?php $i = 0; foreach ($subjectRelation as $relation): ?>
                Item: <a href="<?php echo url('items/show/' . $relation['object_item_id']); ?>"><?php echo $relation['object_item_title']; ?></a><br>
            <?php
                ++$i;
                if ($i == 2 && count($subjectRelation) > 2)
                {
                    echo "<div id='vis-{$term}' style='display: none;'>";
                }
            ?>
            <?php endforeach; ?>
            <?php
                if (count($subjectRelation) > 2)
                {
                    echo <<<EOB
                    </div>
                    <div id='showmore-{$term}'>
                        <a href='javascript:;' onclick='document.getElementById("vis-{$term}").style.display="block"; document.getElementById("showless-{$term}").style.display="block"; document.getElementById("showmore-{$term}").style.display="none";'>See more...</a>
                    </div>
                    <div id='showless-{$term}' style='display: none;'>
                        <a href='javascript:;' onclick='document.getElementById("vis-{$term}").style.display="none"; document.getElementById("showmore-{$term}").style.display="block"; document.getElementById("showless-{$term}").style.display="none";'>See less...</a>
                    </div>
EOB;
                }
            ?>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php foreach ($objectRelations as $term => $objectRelation): ?>
        <tr>
            <td>
            <?php foreach ($objectRelation as $relation): ?>
                Item: <a href="<?php echo url('items/show/' . $relation['subject_item_id']); ?>"><?php echo $relation['subject_item_title']; ?></a><br>
            <?php endforeach; ?>
            </td>
            <td valign='top'><span title="<?php echo html_escape($objectRelation['relation_description']); ?>"><?php echo $objectRelation['relation_text']; ?><?php echo $term; ?></span></td>
            <td><?php echo __('This Item'); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>
</div>
