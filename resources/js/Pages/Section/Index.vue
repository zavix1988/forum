<script>
import MainLayout from "@/Layouts/MainLayout.vue";
import { Link } from "@inertiajs/vue3";

export default {
    name: "Index",
    layout: MainLayout,
    components: {
        Link
    }
}
</script>

<template>
    <div>
        <div class="flex items-center">
            <h3 class="text-xl mr-4">Sections</h3>
            <Link href="#" class="block w-8 px-2 py-1 bg-white border border-gray-300 rounded-lg text-center">+</Link>
        </div>
    </div>
</template>

<style scoped>

</style>
