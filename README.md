# La Gaceta Galénica

Es un boletín científico editado por la Coordinación de Docencia de la
Policlínica Lic. Manuel María Valdés, en Panamá. Tiene una publicación mensual,
el primer miércoles de cada mes. El contenido está mayormente dirigido a
médicos generales que laboran en los servicios de urgencias de instalaciones
del 1er y 2do nivel de atención.

Consta de un editorial, una nota histórica relevante respecto a la medicina en
Panamá, un tema central que se desarrolla presentando la evidencia más actual
que lo respalde y un tema corto sobre metodología de la investigación o
medicina basada en evidencia.

## Workflow

El boletín está íntegramente desarrollado con herramientas de software libre y
de código abierto. El diseño fue preparado usando el paquete `newspaper-mod`
en LaTeX, la bibliografía es gestionada con BibLaTeX, la edición de imágenes
se realiza con GIMP e Inkscape.

Los archivos de trabajo se organizan en directorios dentro de la carpeta `src`
bajo el formato `V##E##`, para exportar el manuscrito hacemos lo siguiente:

    pdflatex gaceta
    biber gaceta
    pdflatex gaceta

El primer paso generará una versión preliminar y creará algunos archivos
temporales de las referencias. El segundo paso creará la bibliografía. El
tercer paso compilará la versión preliminar completa. Una vez sea verificado
el manuscrito y consideremos sea la versión final, añadiremos el pie de página:

    python watermark.py

Este script nos preguntara el número y volumen de la edición bajo el formato
`V##E##` y generará el documento final dentro del directorio `dist`. Luego de
generado este archivo, podemos generar la imagen de cubierta que aparecerá en
el sitio web.

    python cover.py

El script nos preguntará el volumen y creará el archivo de imagen del cover.

## Snippets

<<<<<<< HEAD
**Imágenes anchas**

=======
>>>>>>> 4873d34692b72a008cde805b96ef04af43bc9f5d
Para añadir imágenes que ocupan el ancho del manuscrito:

    \begin{figure*}[ht]
        \includegraphics[width=\linewidth]{imagen.png}
        \caption{Comentario del pie de imagen}
        \label{fig:etiqueta}
    \end{figure*}

Con `fig:etiqueta` podemos referenciar la imagen dentro del documento.
