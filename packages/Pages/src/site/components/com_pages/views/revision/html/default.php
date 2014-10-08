<?php defined('KOOWA') or die; ?>

<div class="row">
	<div class="span8">
		<?= @template('revision') ?>		
	</div>
	<div class="span4">
		<ul class="an-meta">
			<li><span class="label label-info"><?= sprintf(@text('COM-PAGES-PAGE-REVISION-META-NUMBER'), $revision->revisionNum) ?></span></li>
			<li><?= sprintf( @text('LIB-AN-MEDIUM-AUTHOR'), @date($revision->creationTime, '%B %d %Y - %l:%M %p'), @name($revision->author)) ?></li>
		</ul>
		
		<?= @helper('ui.gadget', LibBaseTemplateObject::getInstance('revisions', array(
    		'title' => @text('COM-PAGES-PAGE-REVISIONS'),
    		'url'   => 'view=revisions&layout=gadget&pid='.$revision->page->id.'&oid='.$actor->id
		))); ?>
	</div>
</div>
