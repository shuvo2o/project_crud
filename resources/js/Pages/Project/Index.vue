<script setup>
import { Head } from "@inertiajs/vue3";
import { Link } from "@inertiajs/vue3";



defineProps({
projects: Array,
});




</script>

<template>
    <Head title="Project"/>
    <marquee behavior="" direction="" class="bg-cyan-600 text-white text-center mt-4 p-2 text-xl">This is Project Home Page</marquee>
    <br>
    <div class="w-full mt-5 pb-5">
        <Link :href="route('project.create')" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium roundend-lg text-sm px-5 py-3 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:ring-blue-800">Add Project</Link>

    </div>
    <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="relative overflow-x-auto">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-blue-700 uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">id</th>
                            <th scope="col" class="px-6 py-3">Skill Name</th>
                            <th scope="col" class="px-6 py-3">Project Name</th>
                            <th scope="col" class="px-6 py-3">Project Url</th>
                            <th scope="col" class="px-6 py-3">Image</th>
                            <th scope="col" class="px-6 py-3">Edit</th>
                            <th scope="col" class="px-6 py-3">Delete</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="project in projects" :key="project.id" class="odd:bg-white odd:dark:bg-gray-900 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4  font-medium text-gray-900 whitespace-nowrap dark:text-white">{{project.id}}</th>
                            <td class="px-6 py-4">{{project.skill.name}}</td>
                            <td class="px-6 py-4">{{project.name}}</td>
                            <td class="px-6 py-4">{{project.project_url}}</td>
                            <td class="px-6 py-4">
                                <img :src="`/${project.image}`" class="h-10 w-20 object-cover rounded-full border border-blue-300 p-2" alt="">
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</template>

<style scoped>

</style>