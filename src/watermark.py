edicion = input("Por favor introduzca el volumen y edición (ej: V01E01): ")

if edicion:

    from pdfrw import PdfReader, PdfWriter, PageMerge
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

    print("El manuscrito final ha sido generado.")

else:

    print('No se ingreso código de edición.')
