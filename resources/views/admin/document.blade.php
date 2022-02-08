@extends('layouts.admin')

@section('content')
<div class="accordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h5>
                <button class="btn btn-link" data-toggle="collapse" data-target="collapseOne">How to Navigate to the FrontEnd</button>
            </h5>
        </div>
        <div class="collapse show" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <p>The Frontend is the portion of the website accessible to the user. Steps:</p>
                <ul>
                    <li>On the dashboard</li>
                    <li>Click the Home Link on the top navigator bar.</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingTwo">
            <h5>
                <button class="btn btn-link" data-toggle="collapse" data-target="collapseTwo">How to Add a Post</button>
            </h5>
        </div>
        <div class="collapse show" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
                <p>Post is what the user sees and is created by an editor. Steps:</p>
                <ul>
                    <li>Click the Breadcrumb menu on the left of the dashboard navbar, this opens a list of options.</li>
                    <li>Click the Posts tab which open a list of posts and on the upper left a (Create post) button.</li>
                    <li>Click the button to create a new post</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingThree">
            <h5>
                <button class="btn btn-link" data-toggle="collapse" data-target="collapseThree">How to Add an Image for a post.</button>
            </h5>
        </div>
        <div class="collapse show" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
                <p>The images added are those associated by a post</p>
                <ul>
                    <li>Click the Breadcrumb menu on the left of the dashboard navbar, this opens a list of options.</li>
                    <li>Click the Posts tab which open a list of posts and on the upper left a (Create post) button.</li>
                    <li>Click the button to create a new post</li>
                    <li>On the create post form, click the orange (Click here to get image button), this redirects to an image gallery where you pick a post.</li>
                    <li>Click on a selected image to generate a url of the image</li>
                    <li>Copy the url in the image field</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingFour">
            <h5>
                <button class="btn btn-link" data-toggle="collapse" data-target="collapseFour">How to Add a Video</button>
            </h5>
        </div>
        <div class="collapse show" id="collapseFour" aria-labelledby="headingFour" data-parent="#accordion">
            <div class="card-body">
                <p></p>
                <ul>
                    <li>Click the Breadcrumb menu on the left of the dashboard navbar, this opens a list of options.</li>
                    <li>Click the Videos tab which open a list of posts and on the upper left a (Create video) button.</li>
                    <li>Click the button to add a new video</li>
                    <li>NOTE: Urls added are copied from youtube</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingFive">
            <h5>
                <button class="btn btn-link" data-toggle="collapse" data-target="collapseFive">How to Publish a Post</button>
            </h5>
        </div>
        <div class="collapse show" id="collapseFive" aria-labelledby="headingFive" data-parent="#accordion">
            <div class="card-body">
                <p>Once Published a post is visible to the use</p>
                <ul>
                    <li>Click the Breadcrumb menu on the left of the dashboard navbar, this opens a list of options.</li>
                    <li>Click the Posts tab which open a list of posts and on the upper left a (Create post) button.</li>
                    <li>Pick the post you wish the user to see and click publish</li>
                    <li>The post will be published and the user will be able to view it</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingSix">
            <h5>
                <button class="btn btn-link" data-toggle="collapse" data-target="collapseSix">How to Publish a Video</button>
            </h5>
        </div>
        <div class="collapse show" id="collapseSix" aria-labelledby="headingSix" data-parent="#accordion">
            <div class="card-body">
                <p>Once Published a video is visible to the user</p>
                 <p>Post is what the user sees and is created by an editor. Steps:</p>
                <ul>
                    <li>Click the Breadcrumb menu on the left of the dashboard navbar, this opens a list of options.</li>
                    <li>Click the Videos tab which open a list of videos and on the upper left a (Create video) button.</li>
                    <li>Pick the video you wish the user to see and click publish</li>
                    <li>The video will be published and the user will be able to view it</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingSeven">
            <h5>
                <button class="btn btn-link" data-toggle="collapse" data-target="collapseSeven">How to Add an Editor</button>
            </h5>
        </div>
        <div class="collapse show" id="collapseSeven" aria-labelledby="headingSeven" data-parent="#accordion">
            <div class="card-body">
                <p>Editors are accounts on the website with admin priviledges</p>
                <ul>
                    <li>Click the Breadcrumb menu on the left of the dashboard navbar, this opens a list of options.</li>
                    <li>Click the Users tab which open a list of user and on the upper left a (Create editor) button.</li>
                    <li>Click on the Add Editor button, fill in the form to create a user</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingEight">
            <h5>
                <button class="btn btn-link" data-toggle="collapse" data-target="collapseEight">How to Remove an Editor</button>
            </h5>
        </div>
        <div class="collapse show" id="collapseEight" aria-labelledby="headingEight" data-parent="#accordion">
            <div class="card-body">
                <p></p>
                <ul>
                    <li>Click the Breadcrumb menu on the left of the dashboard navbar, this opens a list of options.</li>
                    <li>Click the Videos tab which open a list of posts</li>
                    <li>Pick the User you wish the user to remove and click Delete</li>
                    <li>The user will be removed and the account deleted</li>
                    <li>Note: This action is irreversible</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingNine">
            <h5>
                <button class="btn btn-link" data-toggle="collapse" data-target="collapseNine">How to Add a Category</button>
            </h5>
        </div>
        <div class="collapse show" id="collapseNine" aria-labelledby="headingNine" data-parent="#accordion">
            <div class="card-body">
                <p></p>
                <ul>
                    <li>Click the Breadcrumb menu on the left of the dashboard navbar, this opens a list of options.</li>
                    <li>Click the Posts tab which open a list of posts and on the upper left a (Create video) button.</li>
                    <li>Click the Create post button which opens form and on the upper left a (Add Category) button.</li>
                    <li>Click  the Add Category button to add a category</li>
                    <li>Note: This is what is show on the navigation links, be careful not to add undesired categories</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="heading1">
            <h5>
                <button class="btn btn-link" data-toggle="collapse" data-target="collapse1">How to Remove a category </button>
            </h5>
        </div>
        <div class="collapse show" id="collapse1" aria-labelledby="heading1" data-parent="#accordion">
            <div class="card-body">
                <p>Removing a category means no posts can be associated with the category and its navigation link disappear.</p>
                <ul>
                    <li>Click the Breadcrumb menu on the left of the dashboard navbar, this opens a list of options.</li>
                    <li>Click the Posts tab which open a list of posts and on the upper left a (Create video) button.</li>
                    <li>Click the Create post button which opens form and on the upper left a (Add Category) button.</li>
                    <li>Click  the Add Category button to add a category</li>
                    <li>Note: This is what is show on the navigation links, be careful not to add undesired categories</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="heading2">
            <h5>
                <button class="btn btn-link" data-toggle="collapse" data-target="collapse2">How to Create a Post</button>
            </h5>
        </div>
        <div class="collapse show" id="collapse2" aria-labelledby="heading2" data-parent="#accordion">
            <div class="card-body">
                <p></p>
            </div>
        </div>
    </div>
</div>
@endsection