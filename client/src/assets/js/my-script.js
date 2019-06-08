export function importJS(src, async = true, defer = true){
    const script = document.createElement("script");
    script.src = src;
    script.async = false;
    script.defer = false;
    script.type = "javascript";
    document.body.appendChild(script);
}