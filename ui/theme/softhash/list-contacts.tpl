{include file="sections/header.tpl"}

<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-body">

                <form class="form-horizontal" method="post" action="{$_url}customers/list/">
                    <div class="form-group">
                        <div class="col-md-8">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-search"></span>
                                </div>
                                <input type="text" name="name" class="form-control" placeholder="{$_L['Search by Name']}..."/>
                                <div class="input-group-btn">
                                    <button class="btn btn-primary">{$_L['Search']}</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">

                            <a href="{$_url}contacts/add/" class="btn btn-success btn-block"><i class="fa fa-plus"></i> {$_L['Add New Contact']}</a>

                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-body">
<h3>{$_L['Filter by Tags']}</h3>
                <ul class="tag-list" style="padding: 0">
                 {foreach $t as $ts}
                     <li><a href="{$_url}contacts/list/{$ts['text']}/"><i class="fa fa-tag"></i> {$ts['text']}</a></li>
                 {/foreach}
                </ul>
            </div>
        </div>

    </div>
</div>

<div class="row">

    {if ($_c['contact_set_view_mode']) eq 'tbl'}

    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-bordered table-hover sys_table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>{$_L['Name']}</th>
                        <th>{$_L['Company Name']}</th>
                        <th>{$_L['Email']}</th>
                        <th>{$_L['Phone']}</th>
                        <th class="text-right">{$_L['Manage']}</th>
                    </tr>
                    </thead>
                    <tbody>

                    {foreach $d as $ds}

                        <tr>

                            <td><a href="{$_url}contacts/view/{$ds['id']}/">{$ds['id']}</a> </td>

                            <td><a href="{$_url}contacts/view/{$ds['id']}/">{$ds['account']}</a> </td>
                            <td>{$ds['company']}</td>

                            <td>
                                {$ds['email']}

                            </td>
                            <td>
                                {$ds['phone']}
                            </td>
                            <td class="text-right">
                                <a href="{$_url}contacts/view/{$ds['id']}/" class="btn btn-primary btn-xs"><i class="fa fa-search"></i> {$_L['View']}</a>

                                <a href="delete/crm-user/{$ds['id']}/" class="btn btn-danger btn-xs cdelete" id="uid{$ds['id']}"><i class="fa fa-trash"></i> {$_L['Delete']}</a>
                            </td>
                        </tr>

                    {/foreach}

                    </tbody>
                </table>

                </div>
            </div>
        </div>


        {else}

        {foreach $d as $ds}
            <div class="col-md-3 sdiv">
                <!-- CONTACT ITEM -->
                <div class="panel panel-default">
                    <div class="panel-body profile">
                        <div class="profile-image">
                            {if $ds['img'] eq 'gravatar'}
                                <img src="http://www.gravatar.com/avatar/{($ds['email'])|md5}?s=200" class="img-thumbnail img-responsive" alt="{$ds['fname']} {$ds['lname']}">
                            {elseif $ds['img'] eq ''}
                                <img src="{$app_url}sysfrm/uploads/system/profile-icon.png" class="img-thumbnail img-responsive" alt="{$ds['fname']} {$ds['lname']}">
                            {else}
                                <img src="{$ds['img']}" class="img-thumbnail img-responsive" alt="{$ds['account']}">
                            {/if}
                        </div>
                        <div class="profile-data">

                            <div class="profile-data-name">{$ds['account']}</div>

                        </div>

                    </div>
                    <div class="panel-body">
                        <div class="contact-info">

                            <p><small>{$_L['Email']}</small><br/>{if $ds['email'] neq ''}{$ds['email']} {else} {$_L['n_a']} {/if}</p>

                            <p>
                                <a href="{$_url}contacts/view/{$ds['id']}/" class="btn btn-primary btn-xs"><i class="fa fa-search"></i> {$_L['View']}</a>

                                <a href="delete/crm-user/{$ds['id']}/" class="btn btn-danger btn-xs cdelete" id="uid{$ds['id']}"><i class="fa fa-trash"></i> {$_L['Delete']}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        {/foreach}

    {/if}

</div>
<div class="row">
    <div class="col-md-12">
       {$paginator['contents']}
    </div>
</div>
{include file="sections/footer.tpl"}