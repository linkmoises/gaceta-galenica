# Requiere instalar pdfrw
#   pip install pdfrw
#
#   Para usar este script solo hay que introducir el número del volumen.
#
from pdfrw import PdfReader, PdfWriter, PageMerge
import io
import sys

if len(sys.argv)>1:
    edicion = sys.argv[1]
else:
    edicion = input("\x1b[0;33mEscriba el nombre del volumen (ej: V01E01):\x1b[0m ")

def watermarker(path, watermark, output):
    base_pdf = PdfReader(path)
    watermark_pdf = PdfReader(watermark)
    mark = watermark_pdf.pages[0]

    for page in range(len(base_pdf.pages)):
        merger = PageMerge(base_pdf.pages[page])
        merger.add(mark).render()

    writer = PdfWriter()
    writer.write(output, base_pdf)

if __name__ == '__main__':
    watermarker( str(edicion) + "/gaceta.pdf",
                'watermark.pdf',
                "../dist/gacetagalenica-" + str(edicion) + ".pdf")

print("\x1b[0;33mEl manuscrito final ha sido generado.\x1b[0m")
