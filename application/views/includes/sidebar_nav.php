<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
<<<<<<< HEAD
        <li class="<?php if($active == 'Most Recent' || $active == 'Most Viewed') echo 'active'; ?>">
            <a href="javascript:;" data-toggle="collapse" data-target="#explore"><i class="fa fa-fw fa-folder-open"></i> Explore <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="explore" class="collapse">
                <li class="<?php if($active == 'Most Recent') echo 'active'; ?>">
                    <a href="<?php echo site_url() ?>/explore/most_recent">Most Recent</a>
                </li>
                <li class="<?php if($active == 'Most Viewed') echo 'active'; ?>">
                    <a href="<?php echo site_url() ?>/explore/most_viewed">Most Viewed</a>
                </li>
            </ul>
        </li>
        
        <li class="<?php if($active == 'Create Group' || $active == 'Enter Group' || $active == 'Manage Group') echo 'active'; ?>">
            <a href="javascript:;" data-toggle="collapse" data-target="#groups"><i class="fa fa-fw fa-users"></i> Groups <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="groups" class="collapse">
                <li class="<?php if($active == 'Create Group') echo 'active'; ?>">
                    <a href="<?php echo site_url() ?>/groups/create_group">Create Group</a>
                </li>
                <li class="<?php if($active == 'Enter Group') echo 'active'; ?>">
                    <a href="<?php echo site_url() ?>/groups/enter_group">Enter Group</a>
                </li>
                <li class="<?php if($active == 'Manage Group') echo 'active'; ?>">
                    <a href="<?php echo site_url() ?>/groups/manage_group">Manage Group</a>
                </li>
            </ul>
=======
        <li class="active">
            <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>
        <li>
            <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
        </li>
        <li>
            <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
        </li>
        <li>
            <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
        </li>
        <li>
            <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
        </li>
        <li>
            <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-folder-open"></i> Explore <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo" class="collapse">
                <li>
                    <a href="<?php echo site_url() ?>/explore/most_recent">Most Recent</a>
                </li>
                <li>
                    <a href="#">Most Viewed</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
>>>>>>> 2ec5d35a61ae30db1bf2142a77a073015a75d2c7
        </li>
    </ul>
</div>