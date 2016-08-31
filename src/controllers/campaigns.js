var express     = require('express'),
    Campaigns      = express.Router(),
    mongoose    = require('mongoose'),
    CampaignModel   = require('../models/campaign'),
    fs          = require('fs');



Campaigns.route('/campaigns')
  // GET - see JSON of all 
  .get(function(req, res, next) {
    CampaignModel.find(function(err, campaigns) {
      res.json(campaigns);
    });
  });

Campaigns.route('/profile')
  .get(function(req, res, next) {
        res.render('profile');
    }); 

Campaigns.route('/?')
  // GET - render page 
  .get(function(req, res, next) {
      campaigns.reverse();
      res.render('campaigns', {'campaigns': campaigns});
  });





module.exports = Campaigns;
