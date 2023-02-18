<template>
    <div class="container">
        <form class="col-12 col-mg-8 col-sm-6 mx-auto" @submit.prevent="editSkill($route.params.id)">
            <div class="mb-3">
                <label for="name" class="form-label">Skill Name:</label>
                <input  v-model="skill.nome" type="text" class="form-control" id="name" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <input v-model="skill.description"  type="text" class="form-control" id="description" placeholder="name@example.com">
            </div>
            <button type="submit" class="btn btn-success">Invia</button>
        </form>
    </div>
</template>

<script setup>
import useSkills from '../../composable/skills';
import { onMounted } from 'vue';

const {skill, getSkill, editSkill} = useSkills();
const props = defineProps({
    id:{
        required : true,
        type: String
    }
})
 onMounted(() => getSkill(props.id));
</script>

<style lang="scss" scoped>

</style>