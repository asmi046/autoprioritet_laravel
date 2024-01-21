<details
{{ ($isopen)?"open":""}}
>
    <summary class="pi">
        <x-product-table.information
        :brand="$brand"
        :didgest="$tovar['didgest']"
        ></x-product-table.main>
    </summary>
    <div class="response">
        <x-product-table.main :brand="$tovar['tovars']"></x-product-table.main>
    </div>
</details>
