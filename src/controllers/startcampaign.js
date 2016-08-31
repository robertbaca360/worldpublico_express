
//  N E W   R E V I E W   P O S T   C O N T R O L L E R
//  ===================================================

//  Requires
//  --------
var express = require('express'),
NewCampaign   = express.Router(),
mongoose    = require('mongoose'),
CampaignModel = require('../models/campaign'),
fs          = require('fs');

  NewCampaign.route('/')
  .post(function(req, res, next) {
    console.log(req.body)
    CampaignModel.create({
      title:      req.body.title,
      goal:       req.body.goal,
      catagory:   req.body.catagory,
      location:   req.body.location,
      story:      req.body.story


    }, function(err, campaign) {
      if (err) {
        console.log(err);
        res.render('startcampaign', {error:err});
      } else {
        res.redirect('/users/' + req.session.userID);
      };
    });
  });

  

//  ---------------------------------
module.exports = NewCampaign;
