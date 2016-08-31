
//  P O S T   R E S O U R C E
//  =========================

//  Requires Mongoose
//  -----------------
var mongoose = require('mongoose');

//  Define the post resource model
//  ------------------------------
var CampaignSchema = new mongoose.Schema( {
  userid:      String,
  catagory:    String,
  title:       String,
  description: String,
});

//  Declare Post as a model and attach the schema to it
//  ---------------------------------------------------
module.exports = mongoose.model('Campaign', CampaignSchema)
