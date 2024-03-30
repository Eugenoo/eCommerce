import Home from '../views/HomeView.vue'
import About from '../views/AboutView.vue'
import {createRouter, createWebHistory} from "vue-router";
import Category from "../views/CategoryView.vue";
import Categories from "../views/CategoriesView.vue";
import Cart from "../views/Cart/CartView.vue";
import Checkout from "../views/CheckoutView.vue";
import Login from "../views/LoginView.vue";
import {useUserStore} from "../stores/User/UserStore.js";
import AdminView from "../views/Admin/AdminView.vue";
import AdminProductView  from "../views/Admin/ProductView.vue";
import AdminOrdersView from "../views/Admin/AdminOrdersView.vue";
import SingleProductView from "../views/SingleProduct.vue";
import Delivery from "../components/Cart/DeliveryComponent.vue";
import CartSummary from "../components/Cart/CartSummary.vue";


const routes = [
    { path: '/', name: 'Home' , component: Home },
    { path: '/about', component: About },
    { path: '/category', name: 'Category', component: Category},
    { path: '/category/:name', name: 'ProductCategory', component: Categories, props: true},
    { path: '/product/:id',
      name: 'product',
      component: SingleProductView,
      props:true
    },
    {
        path: '/cart',
        name: 'Cart',
        component: Cart,
        children: [
            {
                path: '/cart/summary',
                name: 'cart.summary',
                component: CartSummary,
            },
            {
                path: '/cart/delivery',
                name: 'cart.delivery',
                component: Delivery,
            },
            {
                path: '/cart/checkout',
                name: 'cart.checkout',
                component: Checkout,
            }
        ]
    },
    { path: '/checkout', name:'checkout', component: Checkout},
    { path: '/test', component: Checkout},
    {
        path: '/login',
        name: 'Login',
        component: Login,
        meta: {
            requiresGuest: true
        }
    },
    {
        path: '/admin',
        name: 'admin',
        redirect: '/admin/dashboard',
        meta: {
            requiresAuth: true
        },
        children: [
            {
                path: '/admin/dashboard',
                name: 'admin.dashboard',
                component: AdminView
            },
            {
                path: '/admin/products',
                name: 'admin.products',
                component: AdminProductView
            },
            {
                path: '/admin/orders',
                name: 'admin.orders',
                component: AdminOrdersView
            }
        ]
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

router.beforeEach((to, from, next) => {
    const store = useUserStore();

    const test = localStorage.getItem('token');

    if(to.meta.requiresAuth && !store.$state.isLoggedIn){
        next('login');
    }
    else if(to.meta.requiresGuest && store.$state.isLoggedIn){
        next();
    }
    else {
        console.log('siema');
        next();
    }
})

export default router