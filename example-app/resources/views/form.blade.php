<form method="POST" action="/unicode">
    <div>
        <input type="text" name="username" placeholder="Nhập username---">
        <input type="hidden" name="_method" value="post"/> 
        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">

      
    </div>
<button type="submit">submit</button>
</form>