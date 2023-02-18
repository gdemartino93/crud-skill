<template>
    <div class="container d-flex flex-column flex-md-column col-md-12 flex-lg-row gap-md-3 gap-lg-5 justify-content-center flex-wrap">
        <div v-for="(skill,index) in skills" @click="getSkill(skill.id)" :key=skill.id class="card col-12 col-8-md col-5-lg my-3" style="width: 18rem;">
            <div class="card-body ">
                <h5 class="card-title text-black fw-bold">{{ skill.nome }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ skill.livello_skill }}</h6>
                <a href="#" class="card-link">Card link</a>
            </div>
        </div>
    </div>

  </template>
  
<script setup>
  import { ref , onMounted } from 'vue';
  import axios from 'axios';
  import store from '../../store';

  // const url = "http://127.0.0.1:8000/api/v1/skills/";

  // axios.defaults.baseURL = "http://127.0.0.1:8000/api/v1"
  const skills = ref([]);
  const skill = ref([]);

  const getSkills = () =>{
    axios.get(store.url)
        .then(res => {
            skills.value = res.data.results;
        })
        .catch(err => console.log(err))
  }
  // chiamta asincrona
  const getSkill = async(id) =>{
    try{
      const res = await axios.get(store.url + id );
      skill.value = res.data.results;
    }catch(err){
      console.log(err)
    }
  }
  
  getSkills();

</script>
<style lang="scss" scoped>

</style>
  <!-- <script>
  import { ref } from 'vue';
  import axios from 'axios';
  
  const url = "http://127.0.0.1:8000/api/v1/skills/";
  
  export default {
    data(){
        return{
            skills : [],
        }
    },
    methods : {
        fetchSkill (){
            axios.get(url)
                .then(res => {
                        this.skills = res.data.results;
                        console.log(this.skills);
                    })
                .catch(error => {
                        console.log(error);
                });
        }
    },
    mounted() {
      this.fetchSkill()
    }
  }
  </script>
  
  <style lang="scss" scoped>

  </style> -->
  