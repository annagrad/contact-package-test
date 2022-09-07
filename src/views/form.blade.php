<form action="" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">
    <textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>
    <input type="submit" value="Contact">
</form>