<template>

    <a v-if="!inBascet" title="Добавить в корзину" href="#" @click.prevent="addToBascet" class="button fill_btn table_cart_btn">
        <svg class="table_icon">
            <use xlink:href="#cart_btn"></use>
        </svg>
    </a>
    <a v-else :href="bascet" :title="'Оформить' + inBascetCount + ' товаров в корзине.'" class="button fill_btn table_cart_btn">
        <svg class="table_icon">
            <use xlink:href="#rub"></use>
        </svg>
    </a>

</template>

<script>

import { ref, computed, watch } from 'vue'
import { useStore } from 'vuex'
export default {

props: {
    sku:String,
    bascet:String,
    product:Object,
    price:Number,
    count:Number,
},

setup(props){

    const store = useStore()

    let inBascet = ref(false)
    let inBascetCount = ref(1)

    watch(() => [store.getters.cartCount], function() {
        let inBascetElem = store.state.cart_tovars.find((elem) => { return elem.product_sku === props.sku})
        inBascet.value = (inBascetElem != undefined)
        inBascetCount.value =  (inBascetElem != undefined)?inBascetElem.quentity:0
    });

    const addToBascet = () => {
        let tiken = document.querySelector('meta[name="_token"]').content;

        axios.post('/bascet/add', {
            'product_sku': props.sku,
            'addcount':props.count,
            'product':props.product,
            'price':props.price,
            '_token': tiken
        })
        .then((resp) => {
            console.log(resp)
            store.dispatch('initialBascet')
        })
        .catch(error => console.log(error));
    }

    return {
        inBascet,
        inBascetCount,
        addToBascet,
        bascet:props.bascet
    }
}

}
</script>

<style>

</style>
