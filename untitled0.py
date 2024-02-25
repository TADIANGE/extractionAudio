import  moviepy.editor

video = moviepy.editor.VideoFileClip(r"codelyoko.mp4")
audio = video.audio
audio.write_audiofile("sample.mp3")
print("you are audio was extracted succefully")

