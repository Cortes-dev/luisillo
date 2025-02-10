<?php
function card($image, $name, $link)
{
    echo '<div class="fondoCrd card custom-card border-1 text-center" style="width: 18rem;">
        <img src="' . $image . '" class="card-img-top p-3 object-fit-cover border-1 " alt="Imagen">
        <div class="card-body">
            <a href="' . $link . '" class="btnMouse uppercase"> ' . $name . ' </a>
        </div>
    </div>';
}
