<?php
if($this->session->userdata('adm_logged_in') == true && $this->session->userdata('adm_admin_type') == 'CONSULTANT')
{
	$consultantid = $this->session->userdata('adm_admin_id');
}
?>

<style>
#usrlistingloader::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	border-radius: 10px;
	background-color: #F5F5F5;
}

#usrlistingloader::-webkit-scrollbar
{
	width: 4px;
	background-color: #F5F5F5;
}

#usrlistingloader::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
	background-color: #555;
}

/*
 *  STYLE 2
 */

#style-2::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	border-radius: 10px;
	background-color: #F5F5F5;
}
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}input#searchusr {
    font-family: "Open Sans", sans-serif;
    font-size: 12px;
    margin-top: 4px;
}
.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}

.fletter{
  content:attr(data-letters);
  display:inline-block;
  font-size:1em;
  width:2.5em;
  height:2.5em;
  line-height:2.5em;
  text-align:center;
  border-radius:50%;
  /*background:#ec7501;*/
  vertical-align:middle;
  margin-right:1em;
  color:white;
  
}
.chat-area {
    font-size: 13px;
    margin: 0 auto 30px;
    box-shadow: -8px 12px 18px 0 rgba(25,42,70,.13);
	background:#fff;
	    border:2px solid #dddddd!important;
	    border-radius: 3px;
	
}
.chat-left {
    padding: 0;
        border-right: 2px solid #dddddd!important;;
        border-radius: 3px;
}
.bc {
    padding: 8px 10px 14px;
    border-bottom: 2px solid #dddddd!important;
    position: sticky;
    width: 100%;
    background: #fff;
    box-shadow: -8px 3px 6px 0 rgba(25,42,70,.13);
}
#chatwindow {
    max-height: 384px;
    /*height: 385px;*/
    height:auto;
    position: relative;
    overflow: auto;
}
i.fa.fa-link {
    background-color: #ccc;
    padding: 8px 9px 7px 8px;
    border-radius: 50%;
    color: #fff;
    font-size: 16px;
    margin: 7px 1px 7px 6px;
    margin-right: 2px;
}
div#chatscreen {
    overflow-x: hidden;
    overflow-y: scroll;
    max-height: 384px;
    height: 385px;
	background-size:cover;
	/*background-image:url('img/chatbox.png');*/
}
.pd {
    padding: 0;
    background-color: #FFF;
    margin: 0;
    /*border-left: 1px solid #ec7501;*/
}textarea#chatmsginput {
    font-size: 13px;
}
.vb {
    background-color: #fff;
    margin: 0;
    padding: 8px 13px 1px 13px;
}
.flos {
    width: 100%;
    padding: 12px 7px 13px 7px;
    border-bottom: 1px solid #cccccc61;
    margin-top: 0;
}
.flos ul {
    float: left;
    text-decoration: none;
    list-style-type: none;
    text-align: right;
    padding-right: 10px;
    padding-top: 6px;
    width: 80%;
}
.vb i {
    color: #000;
    border: 1px solid #dedede;
    padding: 5px 10px 6px 10px;
    border-radius: 3px;
    background-color: #dedede;
    margin-top: 10px;
}
.cht {
   
   /* position: absolute;
    right: 2px;
    top: 10px;*/
}
.cht h5 {
    padding-top: 10px;
}
.chat-box-tray {
    background: #00828717 !important;
    display: flex;
    align-items: baseline;
    padding: 10px 15px;
    align-items: center;
    margin-top: 0;
    bottom: 0;
    height: 162px;
}
input[type=text] {
    padding: 5px;
    border: none;
}
.chat {
    border-radius: 0;
}
.bc i {
    color: #fff;
    border: 1px solid #ec7501;
    padding: 5px 10px 6px 10px;
    border-radius: 3px;
    background-color: #ec7501;
    margin-top: 10px;
    
}
.flos ul {
    float: left;
    text-decoration: none;
    list-style-type: none;
    text-align: right;
    padding-right: 10px;
    padding-top: 6px;
    width: 80%;
}
.flos li {
    font-size: 13px;
}
.flos img {
    height: 40px;
    width: 40px;
    border-radius: 50%;
}
.cmm {
    max-height: 315px;
    padding: 15px;
}
.chatss {
    margin-top: 10px;
}
.chatss2 span {
    float: right;
    position: absolute;
}
.dt {
    color: #d50a51;
    margin-right: -45px;
    margin-top: -6px;
    right: 77px;
    font-size: 11px;
}

.incoming_msg_img {
  display: inline-block;
  width: 6%;
}
.received_msg {
  display: inline-block;
  padding: 0 0 0 10px;
  vertical-align: top;
  width: 92%;
 }
 .received_withd_msg p {
  background: #ebebeb none repeat scroll 0 0;
  border-radius: 3px;
  color: #646464;
  font-size: 14px;
  margin: 0;
  padding: 5px 10px 5px 12px;
  width: 100%;
}
.time_date {
  color: #747474;
  display: block;
  font-size: 12px;
  margin: 8px 0 0;
}
.received_withd_msg { width: 57%;}
.mesgs {
  float: left;
  /* padding: 30px 15px 0 25px; */
  width: 100%;
}

 .sent_msg p {
  background: #ec7501 none repeat scroll 0 0;
  border-radius: 3px;
  font-size: 14px;
  margin: 0; color:#fff;
  padding: 5px 10px 5px 12px;
  width:100%;
}
.outgoing_msg{ overflow:hidden; margin:26px 0 26px;}
.sent_msg {
  float: right;
  width: 46%;
}
.input_msg_write input {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  color: #4c4c4c;
  font-size: 15px;
  min-height: 48px;
  width: 100%;
}
.inbox_chat {
    height: 522px;
    overflow-y: scroll;
	background:#fff;
}
.active_chat {
    background: #fbebdc;
}

.chat_list {
    border-bottom: 1px solid #c4c4c4;
    margin: 0;
    padding: 18px 16px 10px;
    padding-bottom: 0px;
}
.chat_people {
    overflow: hidden;
    clear: both;
}
.chat_img {
    float: left;
    width: 11%;
}
.chat_ib {
    float: left;
    padding: 6px 0 0 27px;
    width: 88%;
}
.charleftbox {
    float: right;
    font-style: italic;
    color: #ec7501;
    padding: 59px;
    padding-right: 20px;
    padding-bottom: 6px;
}.bc {
    background: #ecf6ff;
}



.vb {
    background: #ecf6ff;
}#chatscreen::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	border-radius: 10px;
	background-color: #F5F5F5;
}

#chatscreen::-webkit-scrollbar
{
	width:5px;
	background-color: #F5F5F5;
}
form#docfrm {
    height: 109px;
}
#chatscreen::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
	background-color: #555;
}
input#chatdocinput {
    font-size: 14px;
    margin-left: 40px;
}
.notificationbadge {
	position: relative;
	top: -10px;
	right: 8px;
	padding: 0px 8px;
	border-radius: 50%;
	background: red;
	color: white;
}

.notificationbadgelist {
	top: -10px;
	right: 8px;
	padding: 1px 7px;
	border-radius: 50%;
	background: red;
	color: white;
}
</style>
     <div class="content-wrapper">

      


        <div class="container-fluid">

<div class="row" style="margin-left: 3px;
    margin-right: 3px;">

<div class="col-md-12 border chat-area">
    
          <div class="row">
              
                <div class="col-md-9 chat-left">

                    <input type="hidden" name="senderid" id="senderid" value="<?php echo $consultantid;?>">
                    <input type="hidden" name="basePath" id="basePath" value="<?php echo base_url();?>">
                    <input type="hidden" name="viewtype" id="viewtype" value="admin">
					<div class="bc">
                    <i class="fa fa-commenting-o" aria-hidden="true"></i>
                     <span class="chead">  You are chatting with....... </span><b>
                      <span class="chead" id="consultname"></span> <span id="frName" style="float:right; margin-top: 16px;"></span></b>

                   </div>
                    

                
            <div id="chatscreen"> 
                  
              <div class="cmm">
						<div class="mesgs">
						  <div class="msg_history" id="msg_history">
						  
							
							<div class="default_chat pt-5">
								<i class="fa fa-weixin" aria-hidden="true" style="color:#475F7B;margin:0 auto;justify-content: center;font-size: 100px;display: flex;align-items: center;box-shadow: 0 4px 8px 0 rgba(0,0,0,.12),0 2px 4px 0 rgba(0,0,0,.08)!important; background: #ecececfc; border-radius: 100%; width: 30%; height: 180px;"></i>
									
							</div>							
						  </div>
						</div>
				  </div>
                 

                  </div>	
						<?php
						if($this->session->userdata('adm_logged_in') == true && $this->session->userdata('adm_admin_type') == 'CONSULTANT')
						{
						?>
						<form method="post" enctype="multipart/form-data" id="docfrm">
						<div class="col-12">
							<div class="chat-box-tray row">
								<div class="col-12 mb-1">
									<textarea class="form-control chat" placeholder="Type your message here..." name="chatmsginput" id="chatmsginput"></textarea>
								</div>
								
								<div class="col-sm-6"></div>
								<div class="col-sm-4">
									<input class="form-control" type="file" name="chatdocinput" id="chatdocinput" value="">
								</div>
								<div class="col-sm-2">
									<button style="cursor:pointer;" class="btn btn-primary ctawidthauto send_cta pull-right" id="addmsg" data-sender="<?php echo $consultantid;?>" data-receiver="" data-sendertype="CONSULTANT" type="button">Send &nbsp;<i class="fa fa-paper-plane-o ge" aria-hidden="true"></i></button>
								</div>
							</div>
						</div>
						</form>
						<div class="clearfix">&nbsp;</div>
						<div class="col-md-12">
    						<div class="row">
        						<div class="col-md-6">
        							<div id="chatmsgloader" style="color: #f00;padding: 9px;"></div>
        						</div>
        						<div class="col-md-6">
        							<div class="charleftbox" id="charleftbox">Characters Left: <span id="charleft">300</span>/300</div>
        						</div>
    						</div>
						</div>
						<?php } ?>
					</div>

                <div class="col-md-3 pd">
					<div class="vb">
					    <!--<i class="fa fa-commenting-o" aria-hidden="true" style="font-size: 18px; margin-top: 2px;"></i>-->
						
						<div class="cht form-group">
						   <input type="text" class="form-control" name="searchusr" id="searchusr" placeholder="Search Project Title" value="" onkeyup="return getuserlisting('<?php echo base_url();?>');" style="border: 1px solid #ced4da;"> <i class="fa fa-search" style="position: absolute;right: 13px;top: 4px;background: transparent;border: unset;color: #666;"></i>
						</div>
						
						
					</div> 
				
					<div class="inbox_chat" id="usrlistingloader"></div>
                </div>
            </div>
        </div>
	</div>
        </div>