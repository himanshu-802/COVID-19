<style type="text/css">

	html{
		scroll-behavior: smooth;
	}
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: 'Muli', sans-serif;
	}
	.nav_style{
		background-color: #a29bfe!important;

	}
	.nav_style a{
		color: white;
	}
	/*-----header-*/
	.main_header{
		height: 450px;
		width: 100%;
	}
	.rightside h1{
		font-size: 3rem;
	}
	.corona_rotate img{
		animation: gocorona 3s linear infinite;
		height: 70px;
	}
	@keyframes gocorona{
		0% {
			transform: rotate(0);
		}
		100%{
			transform: rotate(360deg);
		}
	}
	.leftside img{
     animation: heartbeat 5s linear infinite;
	}
	@keyframes heartbeat{
		0%{
			transform: scale(.75);
		}
		20%{
			transform: scale(1);
		}
		40%{
			transform: scale(.75);
		}
		60%{
			transform: scale(1);
		}

		80%{
			transform: scale(.75);
		}
		100%{
			transform: scale(1);
		}
	}
	/* *********** corona update *************/

.corona_update{
	margin: 0 0 30px 0; /* margin top,left,bottom,right*/
}
.corona_update h3{
	color: #ff7675;
}
.corona_update h1{
font-size: 2rem;
text-align: center;
 
}



/****************about section******************/

.sub_section{
	background-color:  #fbfafd;
}


/**************footer***************/
.footer_style{
	background-color: #a29bfe!important;
}
.footer_Style p{
	margin-bottom: 0!important;
}

</style>
