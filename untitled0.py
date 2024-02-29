import  moviepy.editor
#entrer le chemin de votre video

chemin =input("quel est le chemin: ")
video = moviepy.editor.VideoFileClip(chemin)

#extraction de l'audio
audio = video.audio

#renommage de l'audio
nom = input("donne un nom a ton audio: ")
audio.write_audiofile(nom)

#affichage que tout c'est bien passer
print("you are audio was extracted succefully")

