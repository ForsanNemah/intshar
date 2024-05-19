<select id="names" onchange="handleChange()">
    <option>Foo</option>
    <option>Bar</option>
    <option>forsan</option>
</select>



<script>

console.log(document.getElementById('names'));
 document.getElementById('names').selectedIndex = 1;
 document.getElementById('names').dispatchEvent(new Event('change'));

function handleChange() {
        alert('hello')
    }

    
</script>
