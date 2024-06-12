<!DOCTYPE html>
<html>
<head>
    <title>Send Email</title>
</head>
<body>
    <h1>Send Email</h1>
    <?php if (isset($message)) { ?>
        <p><?php echo $message; ?></p>
    <?php } ?>
    <form action="<?php echo site_url('EmailController/send'); ?>" method="post" enctype="multipart/form-data">
        <label for="to">To:</label>
        <input type="email" name="to" required><br><br>
        
        <label for="subject">Subject:</label>
        <input type="text" name="subject" required><br><br>
        
        <label for="body">Body:</label>
        <textarea name="body" required></textarea><br><br>
        
        <label for="altbody">Alt Body:</label>
        <textarea name="altbody"></textarea><br><br>
        
        <label for="attachments">Attachments:</label>
        <input type="file" name="attachments[]" multiple><br><br>
        
        <button type="submit">Send Email</button>
    </form>
</body>
</html>
