---
Title: Foo
Description: Foo is fun

---

Foo page content!

<!--CONTACT-MESSAGE-->
<form role="form" method="post" name="contact">
 <div class="form-group contact-name-class">
  <label for="name">Name*</label>
  <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
 </div>
 <div class="form-group contact-mail-class">
  <label for="mail">Email address*</label>
  <input type="email" class="form-control" id="mail" name="mail" placeholder="Enter email">
 </div>
 <div class="form-group contact-subject-class">
  <label for="subject">Subject</label>
  <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
 </div>
 <div class="form-group contact-message-class">
  <label for="message">Message*</label>
  <textarea class="form-control" id="message" name="message" rows="5"></textarea>
 </div>
 <button type="submit" class="btn btn-default" name="contact" value="true">Submit</button>
</form>