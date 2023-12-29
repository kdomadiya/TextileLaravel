import { createRouter,createWebHistory } from "vue-router";
import Dashboard from "@/pages/Dashboard.vue";
import About from "@/pages/About.vue";

import Group from "./pages/group/Index.vue";
import GroupCreate from "./pages/group/Create.vue";
import GroupShow from "./pages/group/Show.vue";
import GroupEdit from "./pages/group/Edit.vue";

import Account from "./pages/account/Index.vue";
import AccountCreate from "./pages/account/Create.vue";
import AccountShow from "./pages/account/Show.vue";
import AccountEdit from "./pages/account/Edit.vue";

import Category from "./pages/category/Index.vue";
import CategoryCreate from "./pages/category/Create.vue";
import CategoryShow from "./pages/category/Show.vue";
import CategoryEdit from "./pages/category/Edit.vue";

import IncomeExpense from "./pages/incomeExpense/Index.vue";
import IncomeExpenseCreate from "./pages/incomeExpense/Create.vue";
import IncomeExpenseShow from "./pages/incomeExpense/Show.vue";
import IncomeExpenseEdit from "./pages/incomeExpense/Edit.vue";

import Order from "./pages/order/Index.vue";
import OrderCreate from "./pages/order/Create.vue";
import OrderShow from "./pages/order/Show.vue";
import OrderEdit from "./pages/order/Edit.vue";

import OrderItem from "./pages/orderItem/Index.vue";
import OrderItemCreate from "./pages/orderItem/Create.vue";
import OrderItemShow from "./pages/orderItem/Show.vue";
import OrderItemEdit from "./pages/orderItem/Edit.vue";

import Product from "./pages/product/Index.vue";
import ProductCreate from "./pages/product/Create.vue";
import ProductShow from "./pages/product/Show.vue";
import ProductEdit from "./pages/product/Edit.vue";

import Stock from "./pages/stock/Index.vue";
import StockCreate from "./pages/stock/Create.vue";
import StockShow from "./pages/stock/Show.vue";
import StockEdit from "./pages/stock/Edit.vue";

import Store from "./pages/store/Index.vue";
import StoreCreate from "./pages/store/Create.vue";
import StoreShow from "./pages/store/Show.vue";
import StoreEdit from "./pages/store/Edit.vue";

import StoreOrder from "./pages/storeorder/Index.vue";
import StoreOrderCreate from "./pages/storeorder/Create.vue";
import StoreOrderShow from "./pages/storeorder/Show.vue";
import StoreOrderEdit from "./pages/storeorder/Edit.vue";

import User from "./pages/user/Index.vue";
import UserCreate from "./pages/user/Create.vue";
import UserShow from "./pages/user/Show.vue";
import UserEdit from "./pages/user/Edit.vue";

import UserRole from "./pages/userrole/Index.vue";
import UserRoleCreate from "./pages/userrole/Create.vue";
import UserRoleShow from "./pages/userrole/Show.vue";
import UserRoleEdit from "./pages/userrole/Edit.vue";

const routes = [
    {path: '/',component:Dashboard},
    // {path: '/dashboard', component:Dashboard},
    {path: '/group', component:Group, name: 'group.index'},
    {path: '/group/create', component:GroupCreate, name: 'group.create'},
    {path: '/group/show/:id', component:GroupShow, name: 'group.show'},
    {path: '/group/edit/:id', component:GroupEdit, name: 'group.edit'},
    {path: '/account', component:Account, name: 'account.index'},
    {path: '/account/create', component:AccountCreate, name: 'account.create'},
    {path: '/account/show/:id', component:AccountShow, name: 'account.show'},
    {path: '/account/edit/:id', component:AccountEdit, name: 'account.edit'},
    {path: '/category', component:Category, name: 'category.index'},
    {path: '/category/create', component:CategoryCreate, name: 'category.create'},
    {path: '/category/show/:id', component:CategoryShow, name: 'category.show'},
    {path: '/category/edit/:id', component:CategoryEdit, name: 'category.edit'},
    {path: '/income-expense', component:IncomeExpense, name: 'incomeExpense.index'},
    {path: '/income-expense/create', component:IncomeExpenseCreate, name: 'incomeExpense.create'},
    {path: '/income-expense/show/:id', component:IncomeExpenseShow, name: 'incomeExpense.show'},
    {path: '/income-expense/edit/:id', component:IncomeExpenseEdit, name: 'incomeExpense.edit'},
    {path: '/order', component:Order, name: 'order.index'},
    {path: '/order/create', component:OrderCreate, name: 'order.create'},
    {path: '/order/show/:id', component:OrderShow, name: 'order.show'},
    {path: '/order/edit/:id', component:OrderEdit, name: 'order.edit'},
    {path: '/orderItem', component:OrderItem, name: 'orderitem.index'},
    {path: '/orderItem/create', component:OrderItemCreate, name: 'orderitem.create'},
    {path: '/orderItem/show/:id', component:OrderItemShow, name: 'orderitem.show'},
    {path: '/orderItem/edit/:id', component:OrderItemEdit, name: 'orderitem.edit'},
    {path: '/product', component:Product, name: 'product.index'},
    {path: '/product/create', component:ProductCreate, name: 'product.create'},
    {path: '/product/show/:id', component:ProductShow, name: 'product.show'},
    {path: '/product/edit/:id', component:ProductEdit, name: 'product.edit'},
    {path: '/stock', component:Stock, name: 'stock.index'},
    {path: '/stock/create', component:StockCreate, name: 'stock.create'},
    {path: '/stock/show/:id', component:StockShow, name: 'stock.show'},
    {path: '/stock/edit/:id', component:StockEdit, name: 'stock.edit'},
    {path: '/store', component:Store, name: 'store.index'},
    {path: '/store/create', component:StoreCreate, name: 'store.create'},
    {path: '/store/show/:id', component:StoreShow, name: 'store.show'},
    {path: '/store/edit/:id', component:StoreEdit, name: 'store.edit'},
    {path: '/store-order', component:StoreOrder, name: 'storeorder.index'},
    {path: '/store-order/create', component:StoreOrderCreate, name: 'storeorder.create'},
    {path: '/store-order/show/:id', component:StoreOrderShow, name: 'storeorder.show'},
    {path: '/store-order/edit/:id', component:StoreOrderEdit, name: 'storeorder.edit'},
    {path: '/user', component:User, name: 'user.index'},
    {path: '/user/create', component:UserCreate, name: 'user.create'},
    {path: '/user/show/:id', component:UserShow, name: 'user.show'},
    {path: '/user/edit/:id', component:UserEdit, name: 'user.edit'},
    {path: '/user-role', component:UserRole, name: 'userrole.index'},
    {path: '/user-role/create', component:UserRoleCreate, name: 'userrole.create'},
    {path: '/user-role/show/:id', component:UserRoleShow, name: 'userrole.show'},
    {path: '/user-role/edit/:id', component:UserRoleEdit, name: 'userrole.edit'},
    // {path: '/about', component:About}
]
const router = createRouter({
    history: createWebHistory(),
    routes
})
export default router;