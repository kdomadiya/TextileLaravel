import { createRouter,createWebHistory } from "vue-router";
import Dashboard from "@/pages/Dashboard.vue";
import About from "@/pages/About.vue";

const routes = [
    {path: '/', component:Dashboard},
    {path: '/dashboard', component:Dashboard},
    // {path: '/about', component:About}
]
const router = createRouter({
    history: createWebHistory(),
    routes
})
export default router;