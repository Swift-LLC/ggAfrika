@extends('layouts.admin')

@section('content')
<div class="container">
        <h4 class="text-center">Documentation</h4>
    <h5>How to Navigate to the FrontEnd</h5>
    <p>The Frontend is the portion of the website accessible to the user. Steps:</p>
    <ul>
        <li>On the dashboard</li>
        <li>Click the Home Link on the top navigator bar.</li>
    </ul>
         
    <h5>How to Add a Post</h5>
    <p>Post is what the user sees and is created by an editor. Steps:</p>
                <ul>
                    <li>Click the Breadcrumb menu on the left of the dashboard navbar, this opens a list of options.</li>
                    <li>Click the Posts tab which open a list of posts and on the upper left a (Create post) button.</li>
                    <li>Click the button to create a new post</li>
                </ul>
    
            <h5>How to Add an Image for a post.</h5>
                <p>The images added are those associated by a post</p>
                <ul>
                    <li>Click the Breadcrumb menu on the left of the dashboard navbar, this opens a list of options.</li>
                    <li>Click the Posts tab which open a list of posts and on the upper left a (Create post) button.</li>
                    <li>Click the button to create a new post</li>
                    <li>On the create post form, click the orange (Click here to get image button), this redirects to an image gallery where you pick a post.</li>
                    <li>Click on a selected image to generate a url of the image</li>
                    <li>Copy the url in the image field</li>
                </ul>
            
            <h5>How to Add a Video</h5>
                <ul>
                    <li>Click the Breadcrumb menu on the left of the dashboard navbar, this opens a list of options.</li>
                    <li>Click the Videos tab which open a list of posts and on the upper left a (Create video) button.</li>
                    <li>Click the button to add a new video</li>
                    <li>NOTE: Urls added are copied from youtube</li>
                </ul>
        
            <h5>How to Publish a Post</h5>
                <p>Once Published a post is visible to the use</p>
                <ul>
                    <li>Click the Breadcrumb menu on the left of the dashboard navbar, this opens a list of options.</li>
                    <li>Click the Posts tab which open a list of posts and on the upper left a (Create post) button.</li>
                    <li>Pick the post you wish the user to see and click publish</li>
                    <li>The post will be published and the user will be able to view it</li>
                </ul>
          
            <h5>How to Publish a Video</h5>
                <p>Once Published a video is visible to the user</p>
                 <p>Post is what the user sees and is created by an editor. Steps:</p>
                <ul>
                    <li>Click the Breadcrumb menu on the left of the dashboard navbar, this opens a list of options.</li>
                    <li>Click the Videos tab which open a list of videos and on the upper left a (Create video) button.</li>
                    <li>Pick the video you wish the user to see and click publish</li>
                    <li>The video will be published and the user will be able to view it</li>
                </ul>
           
            <h5>How to Add an Editor</h5>
                <p>Editors are accounts on the website with admin priviledges</p>
                <ul>
                    <li>Click the Breadcrumb menu on the left of the dashboard navbar, this opens a list of options.</li>
                    <li>Click the Users tab which open a list of user and on the upper left a (Create editor) button.</li>
                    <li>Click on the Add Editor button, fill in the form to create a user</li>
                </ul>
        
            <h5>How to Remove an Editor</h5>
                <ul>
                    <li>Click the Breadcrumb menu on the left of the dashboard navbar, this opens a list of options.</li>
                    <li>Click the Videos tab which open a list of posts</li>
                    <li>Pick the User you wish the user to remove and click Delete</li>
                    <li>The user will be removed and the account deleted</li>
                    <li>Note: This action is irreversible</li>
                </ul>
      
            <h5>How to Add a Category</h5>
                <ul>
                    <li>Click the Breadcrumb menu on the left of the dashboard navbar, this opens a list of options.</li>
                    <li>Click the Posts tab which open a list of posts and on the upper left a (Create video) button.</li>
                    <li>Click the Create post button which opens form and on the upper left a (Add Category) button.</li>
                    <li>Click  the Add Category button to add a category</li>
                    <li>Note: This is what is show on the navigation links, be careful not to add undesired categories</li>
                </ul>
       
            <h5>How to Remove a category</h5>
                <p>Removing a category means no posts can be associated with the category and its navigation link disappear.</p>
                <ul>
                    <li>Click the Breadcrumb menu on the left of the dashboard navbar, this opens a list of options.</li>
                    <li>Click the Posts tab which open a list of posts and on the upper left a (Create video) button.</li>
                    <li>Click the Create post button which opens form and on the upper left a (Add Category) button.</li>
                    <li>Click  the Add Category button to add a category</li>
                    <li>Note: This is what is show on the navigation links, be careful not to add undesired categories</li>
                </ul>
        
            <h5>How to Create a Post</h5>
        
</div>
@endsection