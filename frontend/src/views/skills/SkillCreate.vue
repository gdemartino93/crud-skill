<template>
<div class="container">
    <div class="col-12 col-mg-8 col-sm-6 mx-auto">
        <div class="mb-3">
            <label for="name" class="form-label">Skill Name:</label>
            <input type="text" class="form-control" id="name" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <input type="text" class="form-control" id="description" placeholder="name@example.com">
            <!-- <span>{{ store.api }}</span> -->
            <span>{{ store.api }}</span>
        </div>
    </div>
</div>
</template>

<script setup>
import store from '../../store';
</script>

<style lang="scss" scoped>

</style>