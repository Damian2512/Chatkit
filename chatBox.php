<div class="col-md-4 chat-box" user-id="<?php echo $user_id; ?>">
	<div class="panel panel-primary">
		<?php
		$query = mysqli_query($con, "SELECT * FROM `chat` WHERE `from` IN ('" . $user_id . "','" . auth()->id . "')
        AND `to` IN ('" . $user_id . "','" . auth()->id . "')");

		$user = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `users` WHERE `id` =" . $user_id));
		?>
		<div class="panel-heading">
			<?php echo $user['name']; ?>

			<i class="fa fa-remove pull-right close-chat"></i>
		</div>
		<div class="panel-body chat-user-<?= $user_id;?>">
			<?php
			while ($row = mysqli_fetch_array($query)) {
				$alert = $row['from'] == auth()->id ? 'alert-info' : 'alert-success';
				?>
				<div class="alert <?php echo $alert; ?>"><?php echo user($row['from'])->name.': '. $row['message']; ?></div>

			<?php } ?>

		</div>
		<div class="panel-footer">
			<input type="text" name="message" class="form-control send-message" placeholder="Write message">
		</div>
	</div>
</div>