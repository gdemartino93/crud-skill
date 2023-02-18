<template>
    <div class="container col-12 d-flex flex-column flex-md-row flex-lg-row gap-md-3 gap-lg-5 justify-content-center flex-wrap">
        <div v-for="(skill,index) in skills" @click="getSkill(skill.id)" :key=skill.id class="card col-12 col-md-6 col-lg-3 my-3">
            <div class="card-body position-relative ">
              <div class="d-flex justify-content-end align-items-center">
                <span id="deleteBtn" @click="deleteSkill(skill.id)" class="p-2 fw-bold" style="color: black;">X</span>
                <RouterLink :to="{ name: 'SkillEdit', params:{ id: skill.id }}">Edit</RouterLink>
              </div>
                <h5 class="card-title text-black fw-bold">{{ skill.nome }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ skill.livello_skill }}</h6>
                <a href="#" class="card-link">Card link</a>
            </div>
        </div>
    </div>

  </template>
  
<script setup>
  import { onMounted } from 'vue';
  import useSkills from '../../composable/skills';
  const {skills , getSkills , deleteSkill, getSkill} = useSkills();


  onMounted(()=>{
    getSkills();
  }) 

</script>
<style lang="scss" scoped>
#deleteBtn{
  cursor: pointer;
}
</style>
