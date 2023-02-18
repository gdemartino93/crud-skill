<template>
<div class="container">
    <form class="col-12 col-mg-8 col-sm-6 mx-auto" @submit.prevent="storeSkill(form)">
        <div class="mb-3">
            <label for="name" class="form-label">Skill Name:</label>
            <input v-model="form.name" type="text" class="form-control" id="name" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <input v-model="form.description" type="text" class="form-control" id="description" placeholder="name@example.com">
            <!-- <span>{{ store.api }}</span> -->
            <span>{{ store.api }}</span>
        </div>
        <button type="submit" class="btn btn-success">Invia</button>
    </form>
</div>
</template>

<script setup>
import store from '../../store';
import { reactive } from 'vue';
import axios from 'axios';
import { useRouter } from 'vue-router';
const router = useRouter();

const form = reactive({
    name: "",
    description: ""
})

const storeSkill = async(data) =>{
    try{
        await axios.post(store.url , data)
        await router.push({name : "SkillIndex"})
    }catch(err){
        console.log(err)
    }
}
</script>

<style lang="scss" scoped>

</style>