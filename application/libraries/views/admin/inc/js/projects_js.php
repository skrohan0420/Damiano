<script>
	// Call the dataTables jQuery plugin
	$(document).ready(function () {
		$('#project_table').DataTable();
	});


	$(document).on('change', 'input[name="project_img[]"]', function (e) {
		console.log(1)
		var files = e.target.files;
		$('#projectPrev').html(''); // Clear existing previews

		for (var i = 0; i < files.length; i++) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#projectPrev').append(`<img src="${e.target.result}" height="200" id="project_img"/>`);
			};

			reader.readAsDataURL(files[i]);
		}
	});

	$(document).on('change', 'input[name="project_logo[]"]', function (e) {
		console.log(1)
		var files = e.target.files;
		$('#projectLogo').html(''); // Clear existing previews

		for (var i = 0; i < files.length; i++) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#projectLogo').append(`<img src="${e.target.result}" height="200" id="project_img"/>`);
			};

			reader.readAsDataURL(files[i]);
		}
	});


	var input = document.querySelector("#image_uploads");
	var preview = document.querySelector(".preview");

	input.style.opacity = 0;
	input.addEventListener("change", updateImageDisplay);
	function updateImageDisplay() {
		while (preview.firstChild) {
			preview.removeChild(preview.firstChild);
		}

		var curFiles = input.files;
		if (curFiles.length === 0) {
			var para = document.createElement("p");
			para.textContent = "No files currently selected for upload";
			preview.appendChild(para);
		} else {
			var list = document.createElement("ol");
			preview.appendChild(list);
			for (var i = 0; i < curFiles.length; i++) {
				var listItem = document.createElement("li");
				var para = document.createElement("p");
				if (validFileType(curFiles[i])) {
					var image = document.createElement("img");
					image.src = window.URL.createObjectURL(curFiles[i]);
					image.classList.add("gal_img");

					listItem.appendChild(image);
					listItem.appendChild(para);
				} else {
					para.textContent =
						"File name " +
						curFiles[i].name +
						": Not a valid file type. Update your selection.";
					listItem.appendChild(para);
				}

				list.appendChild(listItem);
			}
		}
	}
	var fileTypes = ["image/jpeg", "image/jpg", "image/png"];

	function validFileType(file) {
		for (var i = 0; i < fileTypes.length; i++) {
			if (file.type === fileTypes[i]) {
				return true;
			}
		}

		return false;
	}
	function returnFileSize(number) {
		if (number < 1024) {
			return number + "bytes";
		} else if (number > 1024 && number < 1048576) {
			return (number / 1024).toFixed(1) + "KB";
		} else if (number > 1048576) {
			return (number / 1048576).toFixed(1) + "MB";
		}
	}

</script>