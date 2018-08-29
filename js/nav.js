var links = new Array(
  new Array("../index_1.html", "Sejarah"),
  new Array("../duli.html", "TAR"),
  new Array("../pentadbiran.html", "Pentadbiran"),
  new Array("../kemudahan_Kolej.html", "Kemudahan"),
  new Array("../b_Pengetua.html", "Pengetua ASTAR"),
  new Array("../logo_Kolej.html", "Logo"),
  new Array("../lagu_Kolej.html", "Lagu"),
  new Array("../alumni.html", "Alumni"),
  new Array("../JTK.html", "Jawatankuasa Tindakan Kolej (JTK)"),
  new Array("../plan_Kolej.html", "Lokasi"),
  new Array("../index.htm", "Kembali"),
  new Array("../online/form.htm", "Borang Aktiviti")
);


function displayNav(){
  document.write("<table width='206' border='0' cellspacing='0' cellpadding='0'>");
  for(var i=0; i<links.length;i++){
        document.write("<tr><td></td><td style='background-image: url(\"../online/images/dotter.gif\"); background-repeat: repeat'><img src='../online/images/spacer.gif' width=1 height=1 /></td><td></td></tr>");

	document.write("<tr><td height='27'>&nbsp;</td><td class='navigationtext2'><a href='"+links[i][0]+"' target='_top'><font size='2' face='Century Gothic'>"+links[i][1]+"</font></a> </td><td>&nbsp;</td></tr>");
}
document.write("<tr><td></td><td style='background-image: url(\"../online/images/dotter.gif\"); background-repeat: repeat'><img src='../online/images/spacer.gif' width=1 height=1 /></td><td></td></tr>");

  document.write("</table>");
  
}