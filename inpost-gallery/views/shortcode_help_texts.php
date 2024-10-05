<div style="display: none;">
    <div id="pn_post_id_help" style="padding: 10px 20px">
        <p>You can set not only post ID, but and special expressions for selecting output images.</p> 
        <p>For example: you want to output 2 first images from 4 last posts. From now no problems. Just paste&nbsp;<strong>{'slug':'post','exec':'take','data':('4:DESC:2:first')}&nbsp;</strong>&nbsp;in popup fileld "Post id"&nbsp;&nbsp;and thats all!</p> <h5>Now supports 2 commands (exec): <span style="color: #ff0000;">take</span>,<span style="color: #ff0000;">takebyid</span>.</h5> <p>Let's consider them.</p> <p><strong>{'slug':'post','exec':'<span style="color: #ff0000;">take</span>','data':('4:DESC:2:first')} - <span style="color: #800000;">output <em>2 first</em> images from <em>4 last(DESC)</em> posts</span></strong></p> <p><em>slug</em> -&nbsp;slug of post or any custom type. Depends of your decision.</p> <p><em>exec</em> - command (<strong>take,takebyid</strong>)</p> <p><em>data</em> - data by which queries posts. In this example 4 mean count of posts, <strong>DESC </strong>or<strong> ASC</strong> - sort order by date, <strong>2</strong> - <em>count</em> of images from each post, <strong>first </strong>or<strong> last</strong>- take 2 first /last &nbsp;images.</p> <p>&nbsp;</p> <p><strong>&nbsp;{'slug':'post','exec':'<span style="color: #ff0000;">takebyid</span>','data':('230:4:last','232:2:first','234:1:last')} - take 4 last images from post with ID 230, take 2 first images from post with ID 232, take 1 last image from post with ID 234. In such oeder as in expression images are outputed.</strong></p> <p><em>slug</em>&nbsp;-&nbsp;slug of post or any custom type. Depends of your decision.</p> <p><em>exec</em>&nbsp;- command (<strong>take,takebyid</strong>)</p> <p><em>data</em>&nbsp;-&nbsp;<strong>'230:4:last' =&gt;'posrID,ImagesCount,first or last images to take'</strong></p> <p>Note:&nbsp;be patient with syntax, and do not write spaces, another way you get error.</p> </div> </div>
    </div>
    
</div>
