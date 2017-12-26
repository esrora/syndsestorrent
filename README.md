# Syndsestorrent
Accesorios de sitios Torrent en Español para Synology Download Station

## Empaquetar el módulo de búsqueda/alojamiento

Para empaquetar los addons ir utils, ejecutando empaquetar_modulo.py de la siguiente manera:

* Empaquetar el dlm y host de todos los addons:
> empaquetar_modulo.py

* Empaquetar el dlm y host de un addon:
> empaquetar_modulo.py <addon>

* Empaquetar el dlm de un addon:
> empaquetar_modulo.py <addon> dlm

* Empaquetar el host de un addon:
> empaquetar_modulo.py <addon> host

----
## Empaquetar el lanzamiento

Empaqueta en un zip (<nombre> <versión>.zip) cada módulo dlm y/o host junto a su léeme.txt:
> empaquetar_lanzamiento.py