<div class="row">
    <div class="col">
        <div class="Contactsection py-5 text-white">
            <div class="text-center">
                <h1>Contact Us</h1>
                <!-- <p> Drop a message or request, we love to hear from you! </p> -->
            </div>
            <form action="index.php#Contactsection" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="Name" class="form-label">Full Name</label>
                    <input type="text" name="Name" class="form-control" placeholder="Enter Name" id="Name" value="<?php echo htmlspecialchars($name); ?>" aria-describedby="Namehelp">
                    <div id="Namehelp" class="form-text text-warning"><?php echo $errors['name']; ?></div>
                </div>
                <div class="form-group">
                    <label for="Email" class="form-label">Email Address</label>
                    <input type="email" name="Email" class="form-control" placeholder="Enter Email Address" id="Email" value="<?php echo htmlspecialchars($email); ?>" aria-describedby="Emailhelp">
                    <div id="Emailhelp" class="form-text text-warning"><?php echo $errors['email']; ?></div>
                </div>
                <div class="form-group">
                    <label for="message" class="form-label">Drop Message</label>
                    <textarea name="message" id="message" class="form-control" cols="40" rows="7" placeholder="Drop your message, we love to hear from you" value="<?php echo htmlspecialchars($message); ?>" aria-describedby="messagehelp"></textarea>
                    <div id="messagehelp" class="form-text text-warning"><?php echo $errors['message']; ?></div>
                </div>

                <div class="feedbackmessage">
                    <p class="text-warning"><?php echo $errors['dbError']; ?></p>
                    <p class="text-white"><?php echo $errors['success']; ?></p>
                </div>

                <div class="row my-3">
                    <div class="col d-grid gap-2">
                        <button type="submit" name="submitContactForm" value="submitContactForm" class="btn btn-primary"> Send </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>