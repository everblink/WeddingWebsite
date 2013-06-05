var config = {
  debug: true,
  title: 'Twitter wall built by @rem',

  search: 'from:@fullfrontalconf OR @fullfrontalconf OR #fullfrontalconf OR #fullfrontal2011 OR full-frontal.org OR #fullfrontal11',
  list: 'fullfrontalconf/delegates11', // optional, just comment it out if you don't want it

  timings: {
    showNextScheduleEarlyBy: '5m', // show the next schedule 10 minutes early
    defaultNoticeHoldTime: '20s',
    showTweetsEvery: '10s'
  }
};

// allows reuse in the node script
if (typeof exports !== 'undefined') {
  module.exports = config;
} 
