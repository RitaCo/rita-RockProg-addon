 <?php
 
     foreach($links->lastPosts as $post){
      echo  $this->Html->link($post->title,[
        'prefix' => 'front',
        'controller' => 'posts',
        'plugin' => 'Learning',
        'action' => 'view',
        'id' =>$post->id, 
        'slug' => $post->slug]);
     }
 ?>
 
 