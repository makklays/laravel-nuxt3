<template>
    <div class="container-fluid p-0">
        <header>
            <div class="row">
                <div class="col-md-8">
                    <a href="" style="margin-right:20px;" ><i class="fa-regular fa-circle-user"></i> Test</a>
                    <a href="/profiles" style="margin-right:20px;" >Profiles</a>
                    <a href="" style="margin-right:20px;" >Logout</a>
                </div>
                <div class="col-md-4" style="text-align:right; padding-right:210px;">
                    <a href="" style="margin-right:20px;" >HE</a>
                    <a href="" style="color:#90B53F;" >EN</a>
                </div>
            </div>
        </header>
        <div class="row m-0" style="padding-right:55px; padding-left:55px; border-bottom:1px solid #e7e7e7;">
            <div class="col-md-10">
                <a href="" class="menu-second" style="" >Home</a>
                <a href="" class="menu-second" style="" >Active investment</a>
                <a href="" class="menu-second" style="" >Fundraising</a>
                <a href="" class="menu-second" style="" >Smart Club</a>
                <a href="" class="menu-second" style="" >How it works</a>
                <a href="" class="menu-second" style="" >Contact</a>
            </div>
            <div class="col-md-2">
                <div style="font-size:42px; color:#142860; margin-top:21px; font-weight:900; letter-spacing:-1px; line-height:32px;">
                    SMART <br/>
                    BUNDLES
                </div>
            </div>
        </div>

        <div class="row m-0" style="padding-right:55px; padding-left:55px;">
            <div class="col-md-12 p-0">
                <slot />
            </div>
        </div>

        <!--footer>© 2025</footer-->
    </div>
</template>

<style scoped>
a.menu-second { display:inline-block; color:#13275F; font-size:18px; margin-right:20px; text-decoration:none; margin-top:39px; margin-bottom:38px; }
.profile-layout {  }
header { background: #132760; color: white; padding: 1rem; padding-right:50px; padding-left:50px; }
header a { color:#FFF; }
main { padding: 1rem; }
footer { background: #1e293b; color: white; padding: 1rem; text-align: center; }
</style>

