<template>
    <footer class="footer">
		<span class="text-right">
		Copyright <a target="_blank" href="#">Your Website</a>
		</span>
        <span class="float-right">
		Powered by <a target="_blank" href="https://www.pikeadmin.com"><b>Pike Admin</b></a>
		</span>
    </footer>
</template>

<script>
    export default {
        name: "bottom",
    }
</script>

<style scoped>
	.footer {
		border-top: 1px solid rgba(115, 140, 152, 0.2);
		bottom: 0;
		color: #818a91;
		text-align: left !important;
		padding: 10px;
		position: absolute;
		right: 0;
		left: 250px;
		background-color: #fff; }

    #admin.enlarged .footer {
        left: 70px; }
</style>