<template>
    <div class="container d-flex justify-content-center gap-5 m-5">
        <div v-for="skill in skills" class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-black fw-bold">{{ skill.nome }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ skill.livello_skill }}</h6>
                <a href="#" class="card-link">Card link</a>
            </div>
        </div>
    </div>

  </template>
  
  <script>
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

  </style>
  