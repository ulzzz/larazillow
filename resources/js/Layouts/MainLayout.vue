<template>
    <header
        class="border-b border-gray-200 dark:border-gray-700 dark:bg-gray-800 bg-white w-full"
    >
        <div class="container mx-auto">
            <nav class="p-4 flex items-center justify-between">
                <div class="text-lg font-medium">
                    <Link href="/listing">Listings</Link>
                </div>
                <div
                    class="text-xl text-indigo-600 dark:text-indigo-300 font-bold text-center"
                >
                    <Link href="/listing">Larazillow</Link>
                </div>
                <div class="flex items-center gap-4" v-if="user">
                    <div class="text-sm text-gray-500">{{ user.name }}</div>
                    <Link href="/listing/create" class="btn-primary"
                        >+ New Listing</Link
                    >
                    <div>
                        <Link href="/logout" method="delete" as="button"
                            >Log-out</Link
                        >
                    </div>
                </div>
                <div v-else class="flex items-center gap-4">
                    <Link href="/login">Sign-In</Link>
                    <Link href="/user-account/create">Register</Link>
                </div>
            </nav>
        </div>
    </header>
    <main class="container mx-auto p-4 w-full">
        <div
            v-if="
                typeof page.props !== 'undefined' &&
                typeof page.props.flash !== 'undefined' &&
                page.props.flash.success
            "
            class="mb-4 border rounded-md shadow-sm border-green-200 dark:border-green-800 bg-green-400 dark:bg-green-900 p-2"
        >
            {{ page.props.flash.success }}
        </div>

        <slot>Default</slot>
    </main>
</template>

<script setup>
import { ref, computed } from "vue";
import { Link, usePage } from "@inertiajs/vue3";

const page = usePage();
const flashSuccess = computed(() => page.props.flash.success);
const user = computed(() => page.props.user);
</script>
