<?php
function card($image, $name, $link)
{
    echo '<div class="card-complete custom-card card text-center border-1" style="width: 18rem;">
            <div class="rounded overflow-hidden p-3">
                <img src="' . $image . '" class="image-cover card-img" alt="' . $name . '">
            </div>
            <div class="card-body">
                <a href="' . $link . '" class="btnMouse uppercase">' . $name . '</a>
            </div>
        </div>';
}
?>

