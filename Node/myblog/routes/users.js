var express = require('express');
var router = express.Router();

router.get('/login',function(req,res){
  res.render('login')
});
router.get('/regist',function(req,res){
  res.render('regist')
});
router.post('/checkLogin',function(req,res){
  var username = req.body.uname;
  var password = req.body.pwd;
  if(username=="lisi"&&password=="123"){
    res.render("index",{uname:username})
  }else{
    res.send("fail")
  }
});
router.get('/checkUser',function(req,res){
  var name = req.query.username;
  if(name =="lisi"){
    res.send("success");
  }else{
    res.send("fail")
  }

});


module.exports = router;
