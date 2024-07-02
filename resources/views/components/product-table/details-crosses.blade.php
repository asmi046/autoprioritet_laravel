<details class="crosses"
{{ ($isopen)?"open":""}}
>
    <summary class="pi">
        <x-product-table.information
        :brand="$heder"
        :didgest="$didgest"
        ></x-product-table.main>
    </summary>

    <div class="response">
        {{ $slot }}
    </div>
</details>
