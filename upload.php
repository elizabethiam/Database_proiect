<!DOCTYPE>
<html>
    <head></head>
    <body>
        <div id="content"><form method="post" action="save.php" enctype="multipart/form-data">
                <input type="hidden" name="size" value="1000000">
                <div>
                    <input type="file" name="image">
                </div>
                <div>
                    
                    Titlu:<textarea name="title" cols="40" rows="4" placeholder="bla bla"></textarea>
                </div>
                <br>
                 <div>
                   Descriere: <textarea name="descr" cols="40" rows="4" placeholder="bla bla"></textarea>
                </div>
                <div>
                    <input type="submit" name="upload" value="Upload Image">
                </div>
            </form>
        </div>
    </body>
</html>

