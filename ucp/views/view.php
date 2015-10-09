<div class="col-md-12">
	<script>var extension = "<?php echo $_REQUEST['sub']?>", showPlayback = <?php echo json_encode($showPlayback)?>, showDownload = <?php echo json_encode($showDownload)?>;</script>
	<?php if(!empty($message)) { ?>
		<div class="alert alert-<?php echo $message['type']?>"><?php echo $message['message']?></div>
	<?php } ?>
	<table id="cdr-grid"
        data-url="index.php?quietmode=1&amp;module=cdr&amp;command=grid&amp;extension=<?php echo $_REQUEST['sub']?>"
        data-cache="false"
        data-state-save="true"
        data-state-save-id-table="ucp-cdr-table"
        data-maintain-selected="true"
        data-show-columns="true"
        data-show-toggle="true"
        data-toggle="table"
        data-pagination="true"
        data-search="true"
				data-sort-order="desc"
				data-sort-name="timestamp"
				data-side-pagination="server"
				data-show-refresh="true"
        class="table table-hover table-bordered cdr-table">
    <thead>
            <tr class="cdr-header">
            <th data-field="timestamp" data-sortable="true" data-formatter="UCP.Modules.Cdr.formatDate"><?php echo _("Date")?></th>
            <th data-field="text" data-sortable="true" data-formatter="UCP.Modules.Cdr.formatDescription"><?php echo _("Description")?></th>
						<th data-field="duration" data-sortable="true" data-formatter="UCP.Modules.Cdr.formatDuration"><?php echo _("Duration")?></th>
						<?php if($showPlayback) { ?>
							<th data-field="playback" data-formatter="UCP.Modules.Cdr.formatPlayback"><?php echo _("Playback")?></th>
						<?php } ?>
						<th data-field="controls" data-formatter="UCP.Modules.Cdr.formatActions"><?php echo _("Controls")?></th>
        </tr>
    </thead>
</table>
</div>
