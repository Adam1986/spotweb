Spotweb registration

Hello <?php echo $user['firstname'] . ' ' . $user['lastname'] ?>,

An account has been created for you on <?php echo $settings->get('spotweburl'); ?>.

You can login with the following information:

Username:		<?php echo $user['username']; ?> 
Password:		<?php echo $user['newpassword1']; ?> 

Thanks,
<?php echo $adminUser['firstname'] . ' ' . $adminUser['lastname']; ?>.
