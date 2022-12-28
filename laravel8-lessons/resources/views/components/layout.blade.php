
<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script defer >
     let categoryparam='%';
     let searchparam='';
     if(window.location.href.split('?')+'/'!=window.location.host){

        window.location.href.split('?')[1].split("&").forEach(element => {
                  if(element.split('=')[0]=='search'){
                      searchparam=element.split('=')[1]
                  }
                  if(element.split('=')[0]=='category'){
                      categoryparam=element.split('=')[1]
                  }
        });


     }
     function applySearch(event) {

    if (searchparam == "") {
        if(categoryparam=='%'){
            window.location.href=window.location.href
        }
        else{
        window.location.href = "/?category=" + categoryparam;}
    }
    else if(categoryparam=='%'){
        window.location.href = "/?search=" + searchparam;
    }
    else{
        window.location.href = "/?search=" + searchparam+'&&category='+categoryparam;
    }
    }


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

        window.onload=function(){


        document.getElementsByClassName("select")[0].value=categoryparam;
        document.getElementById("search").value=searchparam;

        };
        //document.getElementsByClassName("select")[0].value=searchparam





</script>

<body style="font-family: Open Sans, sans-serif">
{{$slot}}
</body>


