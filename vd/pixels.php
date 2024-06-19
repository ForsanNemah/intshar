<script>





function downloadVideo(videoUrl, fileName) {
  const xhr = new XMLHttpRequest();
  xhr.open('GET', videoUrl, true);
  xhr.responseType = 'blob';

  xhr.onload = function() {
    if (xhr.status === 200) {
      const blob = xhr.response;
      const url = URL.createObjectURL(blob);
      const a = document.createElement('a');
      a.href = url;
      a.download = fileName;
      a.click();
      a.remove();
      URL.revokeObjectURL(url);
    }
  };

  xhr.onerror = function() {
    console.error('Error downloading video:', xhr.status);
  };

  xhr.send();
}
// Example usage
const videoUrl = 'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4';
const fileName = 'video.mp4';
downloadVideo(videoUrl, fileName);

alert("dd");
</script>