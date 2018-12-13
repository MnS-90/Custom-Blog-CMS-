<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th>Id</th>
        <th>Author</th>
        <th>Comment</th>
        <th>E-mail</th>
        <th>Status</th>
        <th>In Response to</th>
        <th>Date</th>
        <th>Approved</th>
        <th>Unapproved</th>
        <th>Delete</th>
    </tr>
    </thead>

    <?php

    $query = "SELECT * FROM comments ";
    $select_comments = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_comments)) {
        $comment_id = $row['comment_id'];
        $comment_post_id = $row['comment_post_id'];
        $comment_author = $row['comment_author'];
        $comment_email = $row['comment_email'];
        $comment_content = $row['comment_content'];
        $comment_status = $row['comment_status'];
        $comment_date = $row['comment_date'];

        echo "<tr><td>$comment_id</td>
              <td>$comment_author</td>
              <td>$comment_content</td>
              <td>$comment_email</td>
              <td>$comment_status</td>";

        $query = "SELECT * FROM posts WHERE post_id = $comment_post_id ";
        $select_post_id_query = mysqli_query($connection, $query);
        confirmQuery($select_post_id_query);

        while ($row = mysqli_fetch_assoc($select_post_id_query)) {
            $post_id = $row['post_id'];
            $post_title = $row['post_title'];

            echo "<td><a href='../post.php?p_id=$post_id'>$post_title</a></td>";
        }

        echo "<td>$comment_date</td>
              <td><a href='comments.php?approved=$comment_id'>Approved</a></td>
              <td><a href='comments.php?unapproved=$comment_id'>Unapproved</a></td>
              <td><a href='comments.php?delete=$comment_id'>Delete</a></td>
              </tr>";
    }
    ?>

    <tbody>
    </tbody>
</table>

<?php
// approved functionality
if (isset($_GET['approved'])) {
    $the_comment_id = $_GET['approved'];

    $query = "UPDATE comments SET comment_status = 'Approved' WHERE comment_id = $the_comment_id";
    $approved_query = mysqli_query($connection, $query);

    header("Location: comments.php");
}

// unapproved functionality
if (isset($_GET['unapproved'])) {
    $the_comment_id = $_GET['unapproved'];

    $query = "UPDATE comments SET comment_status = 'Unapproved' WHERE comment_id = $the_comment_id";
    $unapproved_query = mysqli_query($connection, $query);

    header("Location: comments.php");
}

// delete comment functionality
if (isset($_GET['delete'])) {
    $the_comment_id = $_GET['delete'];

    $query = "DELETE FROM comments WHERE comment_id = {$the_comment_id}";
    $delete_comment_query = mysqli_query($connection, $query);

    header("Location: comments.php");
}
?>