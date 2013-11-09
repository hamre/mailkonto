<?php

include "sys/core/init.inc.php";
include "inc/header.php";
?>
<section class="row" id="styled">
    <div class="col col_11">
        <article>
            <h1>This is a test</h1>
            <span class="information">Posted by <b>Björn Ax</b>, on <i>2013.11.09</i> with <a href="#comments">10 comments</a></span>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec mi sed nibh facilisis scelerisque at quis enim. Quisque sit amet lacus sed diam dictum interdum vel at lorem. Nullam convallis scelerisque elit, vel pharetra lectus interdum non. Sed mollis magna ac odio mollis consectetur. Ut ultrices tortor in felis aliquet sodales sagittis arcu lobortis. Phasellus eu felis tortor. Etiam mollis urna eget lorem lobortis a congue sapien cursus. Vestibulum vel leo leo, quis imperdiet arcu. Integer nec neque at diam eleifend tincidunt pharetra eu est. Nulla malesuada pharetra ligula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus lorem mauris, pellentesque vel bibendum egestas, scelerisque vitae magna. Suspendisse pretium ligula
                eget risus dapibus eleifend. Praesent eu erat ut tortor dictum blandit vel a augue. Morbi velit enim, eleifend vel tempor id, mollis quis arcu. Aliquam quis massa nisi, at iaculis tortor. Phasellus vel justo sit amet justo mattis laoreet. Praesent commodo, urna nec scelerisque rhoncus, libero erat congue tellus, eget consequat orci sapien non sem. Proin vel ipsum luctus felis accumsan aliquet.</p>

            <p>Pellentesque a dictum nisi. Aliquam ac semper metus. Nullam nisi justo, varius sed laoreet sed, cursus ac mi. Integer scelerisque mauris vel nulla interdum auctor luctus eget dolor. Maecenas urna dolor, posuere id gravida quis, 				accumsan et quam. Phasellus eget malesuada lorem. Vivamus lectus libero, eleifend sit amet tempus eget, pellentesque vel augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed eget dui quis urna dignissim porta ut dignissim mi. Aliquam erat volutpat. Donec turpis dui, malesuada non iaculis et, malesuada id velit. Donec nunc lorem, semper quis adipiscing quis, consectetur varius est. Praesent eget nisl ut velit ultrices adipiscing id eu purus. Integer tincidunt, metus ut fringilla laoreet, nunc augue consectetur enim,
                a laoreet nisl lorem sit amet odio. Nunc et dolor et sem posuere blandit. Mauris ac tellus gravida ipsum hendrerit egestas sed eget nisi. Etiam non lacus sed risus pellentesque dictum. Donec mi felis, feugiat quis facilisis vel, venenatis et purus.</p>

            <p>Morbi sagittis urna non felis tristique accumsan. Maecenas eget condimentum velit. Pellentesque diam est, pretium id cursus vitae, mattis non sapien. Aliquam in erat elit, vestibulum porttitor turpis. Nunc in ipsum vel neque blandit porttitor. Vestibulum ut nulla arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum non nulla turpis. Nulla facilisi. Vivamus rhoncus porta erat ullamcorper posuere. Etiam laoreet aliquet neque ac aliquet. Phasellus a nunc quam, eget mollis dolor. Quisque suscipit vulputate commodo. Nam malesuada odio ut enim vehicula vestibulum. Pellentesque nec turpis libero, a egestas diam. </p>
        </article>
        <!-- -->
        <h2>Comments</h2>
        <ul class="comments">
            <li><span class="comment_information">posted by <b>Angel Grablev</b> on <i>03.17.2010</i> at <i>12:32 am</i></span>
                <p>Pellentesque a dictum nisi. Aliquam ac semper metus. Nullam nisi justo, varius sed laoreet sed, cursus ac mi. Integer scelerisque mauris vel nulla interdum auctor luctus eget dolor. Maecenas urna dolor, posuere id gravida quis, 				accumsan et quam. Phasellus eget malesuada lorem. Vivamus lectus libero, eleifend sit amet tempus eget, pellentesque vel augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed eget dui quis urna dignissim porta ut dignissim mi. </p>
            </li><!-- -->
            <li><span class="comment_information">posted by <b>Angel Grablev</b> on <i>03.17.2010</i> at <i>12:32 am</i></span>
                <p>Pellentesque a dictum nisi. Aliquam ac semper metus. Nullam nisi justo, varius sed laoreet sed, cursus ac mi. Integer scelerisque mauris vel nulla interdum auctor luctus eget dolor. Maecenas urna dolor, posuere id gravida quis, 				accumsan et quam. Phasellus eget malesuada lorem. Vivamus lectus libero, eleifend sit amet tempus eget, pellentesque vel augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed eget dui quis urna dignissim porta ut dignissim mi. </p>
            </li><!-- -->
        </ul><!-- comments -->

        <form class="col_8 add_comment">
            <fieldset>	
                <legend>Add your comment:</legend>
                <div>
                    <label for="email">email</label>
                    <input type="email" id="email" required="required" class="box_shadow"  />
                </div>
                <div>
                    <label for="name">name</label>
                    <input type="text" id="name" class="box_shadow" />
                </div>
                <div>
                    <label for="url">url</label>
                    <input type="url" id="url" class="box_shadow" />
                </div>
                <div class="textarea">
                    <label for="comment">comment</label>
                    <textarea id="comment" class="box_shadow"></textarea>
                </div>
                <input type="submit" value="add comment &rarr;" />
            </fieldset>
        </form>
        <div class="clear" style="height:10px;"></div>

        <?php

        include "inc/articles.php";
        include "inc/footer.php";
        ?>