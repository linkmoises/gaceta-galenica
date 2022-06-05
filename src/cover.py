# Requiere instalar pdf2image
#   pip install pdf2image
#
#   Para usar este script solo hay que introducir el número del volumen.
#
from pdf2image import convert_from_bytes
from PyPDF2 import PdfFileWriter, PdfFileReader
import io
import sys

if len(sys.argv)>1:
    edicion = sys.argv[1]
else:
    edicion = input("\x1b[0;33mEscriba el nombre del volumen para crear la imagen cover:\x1b[0m ")

input_file = ("../dist/gacetagalenica-" + str(edicion) + ".pdf")

inp = PdfFileReader(input_file, "rb")
page = inp.getPage(0)

wrt = PdfFileWriter()
wrt.addPage(page)

r = io.BytesIO()
wrt.write(r)

images = convert_from_bytes(r.getvalue(),dpi=90,jpegopt={"quality": 90,"progressive": True,"optimize": True})
images[0].save(input_file[:-4]+".jpg")
print("\x1b[0;33mHecho, imagen guardada como: {}.\x1b[0m".format(input_file[:-4]+".jpg"))
r.close()
