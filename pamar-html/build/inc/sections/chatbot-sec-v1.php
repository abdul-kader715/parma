<!--==============================
Chatbot Area
==============================-->
<section class="<?php echo $klass; ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7">
                <div class="title-area text-center">
                    <h3 class="page-title mt-n2">AI Chatbot</h3>
                    <p>AI chatbot integration refers to embedding AI-powered chatbots into business systems to automate customer interactions, provide real-time assistance, and streamline communication processes.</p>
                </div>
                <div class="chatbot-site-wrap">
                    <a href="#"><img src="assets/img/icon/chatbot-icon1-1.png" alt="img"></a>
                    <a href="#"><img src="assets/img/icon/chatbot-icon1-2.png" alt="img"></a>
                    <a href="#"><img src="assets/img/icon/chatbot-icon1-3.png" alt="img"></a>
                    <a href="#"><img src="assets/img/icon/chatbot-icon1-4.png" alt="img"></a>
                </div>
            </div>
            <div class="col-12">
                <form action="mail.php" method="POST" class="chatbot-form mt-60 ajax-contact">
                    <div class="form-title">How Can I Help You? <a href="#" class="new-chat-btn">New Chat</a></div>
                    <div class="row">
                        <div class="form-group style-border col-12">
                            <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Type your message...."></textarea>
                        </div>
                        <div class="form-btn col-12">
                            <span class="ms-lg-auto">While you're chatting, leave it blank and hit the send button to refresh this chat.</span>
                            <button class="th-btn style3">Send Now</button>
                        </div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </form>           
            </div>
        </div>
    </div>
</section>

