import Vue from "vue";

import VueSanitize from "vue-sanitize";
let defaultOptions = {
  allowedTags: [],

};

Vue.use(VueSanitize,defaultOptions);
