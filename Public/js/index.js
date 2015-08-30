$(function(){
  /**
   * [activate the navigation where was click]
   * @type {String}
   */
  $("#navul li").find("a[data-nav='"+ctrlname+"']").attr("class","navactive");

  $("#comment").attr("disabled", false);
  if (document.cookie.indexOf("openid=") == -1){
    $("#comment, #comment-btn").click(function(){
      $("#dlogin").fadeIn("normal",function(){
        $("#comment").attr("disabled", true);
      });
    });
  }else{
    //clear out the textarea
    $("#comment").focus(function(){
      $(this).attr("placeholder", "");
    }).blur(function(){
      $(this).attr("placeholder", "畅所欲言吧");
    });
    // submit the comment
    $("#comment-btn").click(function(){
      if ($("#comment").val() == ""){
        alert('Comment cant be empty.');
      }else{
        $.ajax({
          type : "POST",
          url: commentUrl,
          data: {
            'articleid' : $("#articleid").val(),
            'username' : $ 
          },
          dataType: "html",
          success: function(str){
            alert(str);
          },
          error: function(str){
            alert(str);
          }
        });
      }
    });
  }

  // show the dialog of signing in
  $("#alogin").click(function(){
    $("#dlogin").fadeIn("normal",function(){
      $("#login-way a").click(function(){
        $("#dlogin").hide();
      });
    });
  });

  $("#exit").click(function(){
    $("#dlogin").fadeOut("normal",function(){
        $("#comment").attr("disabled", false);
    });
  });
  // connect to QQ
  $("#connectqq").click(function(){
    var type = $(this).attr("data-src");
    var A=window.open("/oauth/index/?type="+type,"TencentLogin",
    "width=600,height=380,menubar=0,scrollbars=1,resizable=1,status=1,titlebar=0,toolbar=0,location=1");
  });
  // connect to wechat
  $("#connectwechat").click(function(){
    var type = $(this).attr("data-src");
    var A=window.open("/oauth/index/?type="+type,"TencentLogin",
    "width=600,height=380,menubar=0,scrollbars=1,resizable=1,status=1,titlebar=0,toolbar=0,location=1");
  });
  $("").fadeIn('slow/400/fast', function() {
    
  });   
});
  
// //display the navigation
 function showNav(){
  if (flag==0){
    $('#navul').css({display: 'block',zIndex: '10',position: 'absolute', top: '40px'});
    flag=1;
  }
  else{
    $('#navul').css('display','none');
    flag=0;
  }
}

//hide the navigation
function hideNav() {
  if (flag==1) {
    $('#navul').css('display','none');
    flag=0;
  }
}

// //异步提交评论
// function ajaxComment()
// {
//   var username = $('#username').attr('value');
//   var comment = $('#comment').attr('value');
//   var articleid = $('#articleid').attr('value')
//   var commentwrap = DC.getElementById('commentwrap'); // the parent DOM

//   if ($('#username').attr('value') == "") 
//   {
//     alert("用户名不能为空");
//   }
//   else if ($('#comment').attr('value') == "") 
//   {
//     alert("评论内容不能为空");
//   }
//   else
//   {
//     xmlhttp = new XMLHttpRequest();    // create the object XMLHttpRequest

//     xmlhttp.onreadystatechange=function()
//     {
//       if (xmlhttp.readyState==4 && xmlhttp.status==200)
//       {
//         var newdiv = document.createElement("div");
//         newdiv.setAttribute('class', 'comment');
//         var ajaxcontent = xmlhttp.responseText;

//         newdiv.innerHTML = ajaxcontent;
//         var fcomment = commentwrap.firstChild;      // the first DOM whthin the class="page-body"

//         commentwrap.insertBefore(newdiv,fcomment);

//         reFresh();
//       }
//     }

//     xmlhttp.open("post",commentUrl,true);   
//     xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); //simulate post
//     xmlhttp.send('username='+username+'&&comment='+comment+'&&articleid='+articleid);
//   }
// }
// }

