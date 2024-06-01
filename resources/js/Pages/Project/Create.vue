<script setup>
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';
import { useForm } from '@inertiajs/vue3';


// defineProps({
// errors: Object,
// skills: Array
// });

// const form = useForm({
// name: "",
// image: null,
// skill_id: "",
// project_url:"",
// });

// const submit = ()=>{
//     form.post(route('project.store'));
// }
</script>

<template>
  
  <Head title="project-create"/>
  <h2 class="text-xl text-blue-700 leading-tight text-center">Project Create</h2>

  <div class="w-full pb-5">
    <Link :href="route('project.index')" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 ">Add Project</Link>
  </div>


</template>



<style>

</style>