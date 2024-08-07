
    document.addEventListener("DOMContentLoaded", () => {
        let showMobCataloMenuBtn = document.querySelector('.show_mob_menu')
        let mobCatalogMenu = document.querySelector('.mobile_catalog_menu')
        console.log(showMobCataloMenuBtn);
        let mobCatalogMenuList = document.querySelectorAll('.catalogMenuPunctTitle')

        if (mobCatalogMenuList)
            for (let item of mobCatalogMenuList)
            item.onclick = (e) =>  {
                e.preventDefault()
                e.stopPropagation()

                item.parentNode.classList.toggle("_active")
            }

        if (showMobCataloMenuBtn)
            showMobCataloMenuBtn.onclick = (e) =>  {
                e.preventDefault()
                showMobCataloMenuBtn.classList.toggle("menu_open")


                mobCatalogMenu.classList.toggle("mcm_active")
            }

    })
