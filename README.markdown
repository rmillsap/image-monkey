# Welcome to Image Monkey

## What is it?
I created Image Monkey because as I was building web apps I found I was constantly having to work on Image Magick to get my images resized and I thought, 

> Would it be great if there was a web-interface for uploading images and getting an immediate transformed copy of an image.

## How it works
To use image monkey, you must register and get an access key to identify yourself in all requests
    
Then simply request an image by providing the encoded URL of the image, your access key, and the new size constraints.  For example
    
### Here is the URL format
    http://imgmky.com/<<yourkey>>/<<encoded-url>>/<<img-size>>
        
### For example, let's say I had an image at http://www.example.com/image.jpg and I wanted a 100x100 version of this image
    http://imgmkey.com/mykey/http://www.example.com/image.jpg/100x100
    
### Go Image Monkey Go!

Image Monkey will generate that image and provide it for you.



# Backlog
## Create customized instruction profiles for reuse
## Create a pay service that lets Image Monkey cache the image for you (storage)

