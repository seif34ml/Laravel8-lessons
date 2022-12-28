require("./bootstrap");
function filter(event) {
    categoryparam = event.target.value;

    if (searchparam == "") {
        window.location.href = "/?category=" + categoryparam;
    } else if (categoryparam == "%") {
        window.location.href = "/?search=" + searchparam;
    } else {
        window.location.href =
            "/?search=" + searchparam + "&&" + "category=" + categoryparam;
    }
}
