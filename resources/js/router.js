import { createRouter,createWebHistory } from "vue-router";
import Dashboard from "@/pages/Dashboard.vue";
import About from "@/pages/About.vue";
import Group from "./pages/group/Index.vue";
import GroupCreate from "./pages/group/Create.vue";
import GroupShow from "./pages/group/Show.vue";
import GroupEdit from "./pages/group/Edit.vue";

const routes = [
    {path: '/',component:Dashboard},
    // {path: '/dashboard', component:Dashboard},
    {path: '/group', component:Group, name: 'group.index'},
    {path: '/group/create', component:GroupCreate, name: 'group.create'},
    {path: '/group/show/:id', component:GroupShow, name: 'group.show'},
    {path: '/group/edit/:id', component:GroupEdit, name: 'group.edit'},
    // {path: '/about', component:About}
]
const router = createRouter({
    history: createWebHistory(),
    routes
})
export default router;