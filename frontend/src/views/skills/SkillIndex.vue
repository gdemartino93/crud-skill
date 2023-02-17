<template>
    <div class="container d-flex justify-content-center gap-5 m-5">
        <div v-for="skill in skills" class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-black fw-bold">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
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
  