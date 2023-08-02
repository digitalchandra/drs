<div class="comment">
    <div class="row">
        <div class="col-sm-6">
            <h3> Leav Your Comment</h3>
            <?php if(! have_comments()){
               echo "Leave a Comment";
            }
            else{
               echo get_comments_number()."Comments";
            }
            ?>
            
        <div class="comments-inner">
            <?php 
            wp_list_comments(
                array(
                    'avatar_size'=> 120,
                    'style' => 'div',
                    )
                );
            ?>
        </div>
        <div class="comment-fomr">
            <?php if(comments_open()){
                comment_form(
                    array(
                        'class_form'=>'',
                        'title_reply_befor'=> '<h3 id="reply-title" class="comment-replay-title">',
                        'title_reply_after'=> '</h3>'
                        )
                    );
            }
            ?>
        </div>
        </div>
           <div class="col-sm-6">
            
        </div>
        
    </div>
</div>