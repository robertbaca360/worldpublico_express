//  U S E R   C O N T R O L L E R
//  =============================

//  Requires
//  --------
var express     = require('express'),
    Users       = express.Router(),
    mongoose    = require('mongoose'),
    UserModel   = require('../models/user'),
    CampaignModel   = require('../models/campaign'),
    fs          = require('fs');
    


//  Define routes
//  -------------

Users.route('/users')
  .get(function(req, res, next) {
    UserModel.find(function(err, users) {
      res.json(users);  
    });
  });

Users.route('/:id')
  .get(function(req, res, next) {
    UserModel.findOne({_id: req.session.userID}, function(error, user) { 
      CampaignModel.find(function(err, campaigns) {
        campaigns.reverse();
        var userCampaigns = [];
        for (var x in campaigns) {
          if (campaigns[x].userid === req.session.userID) {
            userCampaigns.push(campaigns[x]);
          };
        };
        res.render('useraccount', {user:    user,
                                   campaigns: userCampaigns});                      
      });
    });
  });

Users.route('/startcampaign/:id/?')
  // GET - go to a new post page to post 
  .get(function(req, res, next) {
        res.render('startcampaign', {'campaign': campaign});
    });
  


//  ---------------------------------
module.exports = Users;




