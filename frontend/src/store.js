import { reactive } from "@vue/reactivity";
import axios from "axios";

const store = reactive({
 url :'http://127.0.0.1:8000/api/v1/skills/'
  });

  export default store;