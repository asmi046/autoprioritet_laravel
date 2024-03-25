<template>

    <a v-if="!inBascet" title="Добавить в корзину" href="#" @click.prevent="addToBascet" class="button fill_btn table_cart_btn">
        <svg class="table_icon">
            <use xlink:href="#cart_btn"></use>
        </svg>
    </a>
    <a v-else :href="bascet" :title="'Оформить' + inBascetCount + 'товаров.'" class="button fill_btn">
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
    skuid:String,
    bascet:String,
    product:Object
},

setup(props){

    const store = useStore()

    let countToAdd = ref(1)
    let inBascet = ref(false)
    let inBascetCount = ref(1)


    watch(() => [store.getters.cartCount,props.skuid], function() {
        let inBascetElem = store.state.cart_tovars.find((elem) => { return elem.product_id === props.skuid})
        inBascet.value = (inBascetElem != undefined)
        inBascetCount.value =  (inBascetElem != undefined)?inBascetElem.quentity:0
    });

    const addToBascet = () => {
        let tiken = document.querySelector('meta[name="_token"]').content;

        axios.post('/bascet/add', {
            'product_sku': props.sku,
            'product_id': props.skuid,
            'addcount':countToAdd.value,
            'product':props.product,
            '_token': tiken
        })
        .then(() => {
            store.dispatch('initialBascet')
            console.log(store.getters.cartCount)
        })
        .catch(error => console.log(error));
    }

    const upCounter = () => {
        countToAdd.value++
    }

    const downCounter = () => {
        if (countToAdd.value == 1) return;
        countToAdd.value--
    }

    return {
        inBascet,
        upCounter,
        downCounter,
        countToAdd,
        inBascetCount,
        addToBascet,
        bascet:props.bascet
    }
}

}
</script>

<style>

</style>
