import "./bootstrap";

const inputFoto = document.querySelector("#foto");

inputFoto?.addEventListener("input", () => {
    console.log("test");
    const [file] = inputFoto.files;

    if (file) {
        const imgExistente = document.querySelector("#img-preview");
        if (imgExistente) {
            imgExistente.src = URL.createObjectURL(file);
        } else {
            const img = document.createElement("img");
            img.src = URL.createObjectURL(file);
            img.id = "img-preview";
            document.querySelector(".container-img-preview")?.appendChild(img);
        }
    }
});
