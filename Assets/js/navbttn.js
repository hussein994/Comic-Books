
<script>
    const navbutton = document.querySelector(".nav-button") // button variable
    const navlinks = document.querySelector(".nav-links")   // links variable

    navbutton.addEventListener('click',()=> {   // listen for clicks
    navlinks.classList.toggle('nav-dropdown')   // when clicking add new class to nav-links
})

</script>