//  H O M E   C O N T R O L L E R
//  =============================

var express       = require('express'),
    HomeControl = express.Router(),
    UserModel     = require(__dirname + '/../models/user'),
    CampaignModel   = require(__dirname + '/../models/campaign'),
    bcrypt        = require('bcrypt');

  HomeControl.route('/signed')
  // POST - username and password to the new account form
  .post(function(req, res, next) {
    bcrypt.hash(req.body.password, 10, function(err, hash) {
      UserModel.create({
        fullname: req.body.fullname,
        username: req.body.username,
        password: hash,
        email:    req.body.email,
        city:     req.body.city

      }, function(err, user) {
        if (err) {
          console.log(err);
          res.render('signup', {error: err});
        } else {
          req.session.isLoggedIn = true;
          req.session.userID     = user._id;
          res.redirect('/users/' + user.id);
        }
      })
    })
  })

  HomeControl.route('/log')
  // POST - username and password to the login form
  .post(function(req, res, next) {
    UserModel.findOne({username: req.body.username}, function(error, user) {
      if (error || !user) {
        res.send('Could not find that user.');
      } else {
        bcrypt.compare(req.body.password, user.password, function(err, result) {
          if (err) {
            res.send ('ERROR: ' + err);
          } else if (result) {
            req.session.isLoggedIn = true;
            req.session.userID     = user._id;
            res.redirect('/users/' + user._id);
          } else {
            res.send ('Wrong password!');
          }
        })
      }
    })
  })

  
 HomeControl.route('/donateform')
      .get(function(req, res, next) {
            res.render('donateform');
        });  

  HomeControl.route('/volunteerform')
  .get(function(req, res, next) {
        res.render('volunteerform');
    });  
  
  HomeControl.route('/logout')
  .get(function(req, res, next) {
    req.session.isLoggedIn = false;
    res.redirect('/');
  })

  HomeControl.route('/login')
    .get(function(req, res, next) {
        res.render('login');
      });

  HomeControl.route('/signup')
    .get(function(req, res, next) {
        res.render('signup');
      });

  HomeControl.route('/startcampaign')
    // GET - renders home page
    .get(function(req, res, next) {
        res.render('startcampaign');
      });


  HomeControl.route('/home')
    .get(function(req, res, next) {
          res.render('home');
      });

  HomeControl.route('/profile')
  .get(function(req, res, next) {
        res.render('profile');
    }); 


  HomeControl.route('/campaigns')
    .get(function(req, res, next) {
          res.render('campaigns');
      });

  HomeControl.route('/volunteer')
  .get(function(req, res, next) {
      res.render('volunteer');
  });

  HomeControl.route('/donate')
    .get(function(req, res, next) {
          res.render('donate');
      });

  HomeControl.route('/blog')
    .get(function(req, res, next) {
          res.render('blog');
      });   


  HomeControl.route('/resources')
    .get(function(req, res, next) {
          res.render('resources');
      });   


  HomeControl.route('/howitworks')
    .get(function(req, res, next) {
          res.render('works');
      });   


  HomeControl.route('/story')
    .get(function(req, res, next) {
          res.render('story');
      });   


  HomeControl.route('/profile')
    .get(function(req, res, next) {
          res.render('profile');
      });   




 
  HomeControl.route('/organizations')
  .get(function(req, res, next) {
        res.render('organizations');
    });


  HomeControl.route('/?')
      .get(function(req, res, next) {
        CampaignModel.find(function(err, campaigns) {
          campaigns.reverse();
          campaigns = campaigns.slice(0, 4);
          res.render('home', {campaigns: campaigns});
        });
      });

module.exports = HomeControl;





