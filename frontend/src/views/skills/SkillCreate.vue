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
        </div>
        <button type="submit" class="btn btn-success">Invia</button>
    </form>
</div>
</template>

<script setup>
import { reactive } from 'vue';
import store from '../../store';
import useSkills from '../../composable/skills';

const {storeSkill} = useSkills();

const form = reactive({
    name: "",
    description: ""
})


</script>

<style lang="scss" scoped>

</style>