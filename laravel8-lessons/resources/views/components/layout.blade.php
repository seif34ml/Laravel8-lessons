
<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script defer >

    window.onload=function(){
        console.log("hj");
        document.getElementsByClassName("select")[0].addEventListener('change',function(){
window.location.href=event.target.value;
    document.getElementsByClassName("select")[0].value=event.target.value;

        });document.getElementsByClassName("select")[0].value=window.location.href
    }




</script>

<body style="font-family: Open Sans, sans-serif">
{{$slot}}
</body>


