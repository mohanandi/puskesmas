function addFields(){
 // Number of inputs to create
 var number = document.getElementById("member").value;
 // Container <div> where dynamic content will be placed
 var container = document.getElementById("container");
 // Clear previous contents of the container
 while (container.hasChildNodes()) {
     container.removeChild(container.lastChild);
 }
 for (i=0;i<number;i++){
     // Append a node with a random text
     container.appendChild(document.createTextNode("Tanggal #" + (i+1)));
     container.appendChild(document.createElement("br"));
     // Create an <input> element, set its type and name attributes
     var input = document.createElement("input");
     input.className = "form-control";
     input.type = "date";
     input.name = "member" + i;
     container.appendChild(input);
     // Append a line break 
     container.appendChild(document.createElement("br"));
     container.appendChild(document.createTextNode("Jenis Pembinaan #" + (i+1)));
     container.appendChild(document.createElement("br"));
     // Create an <input> element, set its type and name attributes
     var input = document.createElement("input");
     input.className = "form-control";
     input.type = "text";
     input.name = "member" + i;
     container.appendChild(input);
     // Append a line break 
     container.appendChild(document.createElement("br"));
     container.appendChild(document.createTextNode("Temuan #" + (i+1)));
     container.appendChild(document.createElement("br"));
     // Create an <input> element, set its type and name attributes
     var input = document.createElement("input");
     input.className = "form-control";
     input.type = "text";
     input.name = "member" + i;
     container.appendChild(input);
     // Append a line break 
     container.appendChild(document.createElement("br"));
     container.appendChild(document.createTextNode("Fakta #" + (i+1)));
     container.appendChild(document.createElement("br"));
     // Create an <input> element, set its type and name attributes
     var input = document.createElement("input");
     input.className = "form-control";
     input.type = "text";
     input.name = "member" + i;
     container.appendChild(input);
     // Append a line break 
     container.appendChild(document.createElement("br"));
     container.appendChild(document.createTextNode("Kesimpulan #" + (i+1)));
     container.appendChild(document.createElement("br"));
     // Create an <input> element, set its type and name attributes
     var input = document.createElement("input");
     input.className = "form-control";
     input.type = "text";
     input.name = "member" + i;
     container.appendChild(input);
     // Append a line break 
     container.appendChild(document.createElement("br"));
     container.appendChild(document.createTextNode("Rekomendasi #" + (i+1)));
     container.appendChild(document.createElement("br"));
     // Create an <input> element, set its type and name attributes
     var input = document.createElement("input");
     input.className = "form-control";
     input.type = "text";
     input.name = "member" + i;
     container.appendChild(input);
     // Append a line break 
     container.appendChild(document.createElement("br"));
     container.appendChild(document.createTextNode("Puskesmas #" + (i+1)));
     container.appendChild(document.createElement("br"));
     // Create an <input> element, set its type and name attributes
     var input = document.createElement("input");
     input.className = "form-control";
     input.type = "text";
     input.name = "member" + i;
     container.appendChild(input);
     // Append a line break 
     container.appendChild(document.createElement("br"));
     container.appendChild(document.createTextNode("Dinas Kesehatan Kabupaten #" + (i+1)));
     container.appendChild(document.createElement("br"));
     // Create an <input> element, set its type and name attributes
     var input = document.createElement("input");
     input.className = "form-control";
     input.type = "text";
     input.name = "member" + i;
     container.appendChild(input);
     // Append a line break 
     container.appendChild(document.createElement("br"));
     container.appendChild(document.createTextNode("Target Penyelesaian Waktu #" + (i+1)));
     container.appendChild(document.createElement("br"));
     // Create an <input> element, set its type and name attributes
     var input = document.createElement("input");
     input.className = "form-control";
     input.type = "date";
     input.name = "member" + i;
     container.appendChild(input);
     // Append a line break 
     container.appendChild(document.createElement("br"));
     container.appendChild(document.createElement("hr"));
 }
}