
///////////////////////////===================================================////////////////////////////
const url2 ="../model/DTviemrang.php";
		fetch(url2).then(
			res=>{
				res.json().then(
					data=>{
						console.log(data);
						if(data.length > 0) {

							var temp2 = "";
							data.forEach((u)=> {
								
								temp2 +="<th>";
								
									
								// temp += "<tr>"+ u.Name+"</tr>";
								
								
								temp2 += "<td >"+"<a href='#'>"+ u.avata +"</a>"+"</br>"+ u.Name+"</td>";
								
											

								})
						
						document.getElementById("data2").innerHTML = temp2;
						}
					}
					)
			}
			)

