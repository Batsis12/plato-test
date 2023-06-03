<script setup>
import { ref } from "vue";
import { watch } from "vue";
import { router } from '@inertiajs/vue3'
import moment from 'moment';

const props = defineProps(['movies', 'api_key']);
let input = ref("");
let search = ref('');

watch(search, (value) => {
    router.get(
        "/search_movie",
        { search: value },
        {
            preserveState: true,
        }
    );
});

</script>

<template>
    <div class="container mx-auto grid flex border bg-gray-100 rounded-md my-10">
        <div class="gap-x-6 gap-y-12 font-weight-bolder py-3 px-10 flex justify-center">
            <div>
                <h1 class="font-extrabold w-100">
                    Salman's Practical Test
                </h1>
            </div>
        </div>
        <div class="gap-x-6 gap-y-10 py-3 px-10 flex justify-center">
            <div>
                <input
                    type="text"
                    v-model="search"
                    placeholder="Search"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-60 p-2.5 "
                />
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-x-6 gap-y-10 px-10">
            <div class="item error" v-if="search&&records.length">
                <p>No results found!</p>
            </div>
            <div v-else v-for="movie in movies" :key="record">
                <div class="rounded-lg bg-white shadow-lg">
                    <img :src="'https://image.tmdb.org/t/p/w342/' +  movie.poster_path"  alt="{{ movie.title}}" class="rounded-t-lg" />
                    <div class="p-4">
                        <h2 class="mb-2 text-lg font-semibold">{{ movie.title }}</h2>
                        <p class="mb-2 text-xs text-gray-700">Release Date: {{ moment(movie.release_date).format('MMMM D, Y') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
