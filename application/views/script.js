let video = document.querySelector("#video");
let capture_button = document.querySelector("#capture");
let canvas = document.querySelector("#canvas");
let retake = document.querySelector("#retake");

window.onload = async function() {
    try {
        const stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: false });
        video.srcObject = stream;
    } catch (error) {
        console.error("Error accessing user media:", error);
        // Handle error, such as displaying a user-friendly message or falling back to alternative options
    }
}

capture_button.addEventListener('click', function() {
    video.style.display = "none";
    canvas.style.display = "block";
    markatt.style.display = "inline-block";
    retake.style.display = "inline-block";
    canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
    let image_data_url = canvas.toDataURL('image/jpeg');
    document.getElementById('image-data').value = image_data_url;
    console.log(image_data_url);
    capture_button.style.display = "none";
});

retake.addEventListener("click", function() {
    location.reload();
});