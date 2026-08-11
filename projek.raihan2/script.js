document.addEventListener("DOMContentLoaded", () => {

    const cards = document.querySelectorAll(".product-card");

    cards.forEach((card, index) => {

        card.style.opacity = "0";
        card.style.transform = "translateY(20px)";

        setTimeout(() => {

            card.style.transition = "all .5s ease";

            card.style.opacity = "1";
            card.style.transform = "translateY(0)";

        }, index * 100);

    });

});


function paymentSuccess() {

    alert(
        "Pesanan berhasil dibuat!\\n\\n" +
        "Ini masih versi demo portfolio."
    );

}