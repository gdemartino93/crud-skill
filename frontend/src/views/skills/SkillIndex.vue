<template>
    <div class="container col-12 d-flex flex-column flex-md-row flex-lg-row gap-md-3 gap-lg-5 justify-content-center flex-wrap">
        <div v-for="(skill,index) in skills" @click="getSkill(skill.id)" :key=skill.id class="card col-12 col-md-6 col-lg-3 my-3">
            <div class="card-body position-relative ">
                <span id="deleteBtn" @click="deleteSkill(skill.id)" class="p-2 fw-bold position-absolute top-0 end-0" style="color: black;">X</span>
                <h5 class="card-title text-black fw-bold">{{ skill.nome }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ skill.livello_skill }}</h6>
                <a href="#" class="card-link">Card link</a>
            </div>
        </div>
    </div>

  </template>
  
<script setup>
  import { ref , onMounted } from 'vue';
  import axios, { Axios } from 'axios';
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
      console.log(id);
    }catch(err){
      console.log(err)
    }
  }
  const deleteSkill = async(id) =>{
    if(!window.confirm('Are you sure?')){
      return
    }
    await axios.delete(store.url + id);
    await getSkills();

  }
  
  onMounted:{
    getSkills();
  }


</script>
<style lang="scss" scoped>
#deleteBtn{
  cursor: pointer;
}
</style>
