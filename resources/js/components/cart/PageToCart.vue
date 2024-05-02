<template>
    <div class="to_card_widget">

        <input v-model="count" :min="product.minOrderCount" :step="product.minOrderCount" type="number" name="count" id="">
        <div class="lb_wrapper">
            <div class="sale_btn">
                <to-bascet-btn-page :count="count" :product="product" :sku="sku" :price="price" :bascet="'/bascet'"></to-bascet-btn-page>
            </div>
        </div>
    </div>
</template>

<script>
import { ref, watch } from 'vue'
import ToFavoritesBtn from './ToFavoritesBtn.vue'
import ToBascetBtnPage from './ToBascetBtnPage.vue'

export default {
    components: { ToFavoritesBtn, ToBascetBtnPage },
    props:{
        sku:String,
        product:Object,
        price:Number
    },

    setup(props){

        let count = ref(props.product.minOrderCount)
        return {
            count,
            sku:props.sku,
            product:props.product,
            price:props.price,
        }
    }
}
</script>

<style>

</style>
