ETIENNE_VINCENT_DATABASE

== Musicien ==							(MUSICIAN)

id 										ID
prénom 									FIRSTNAME
nom 									LASTNAME
biographie 								BIOGRAPHY

== Groupe ==							(GROUP_OF_MUSICIANS)

id										ID
nom										LABEL
description								DESCRIPTION
est à afficher dans la partie groupe	HAVE_TO_BE_POSTED

== faire parti de  ==					(TO_BE_PART_OF)

id du musicien							ID_MUSICIAN
id du groupe							ID_GROUP_OF_MUSICIANS

==  Représentation ==					(PERFORMANCE_OF_A_GROUP)

id										ID
libellé									LABEL
informations complémentaires			PRACTICAL_DETAILS
date									DATE
id du groupe							ID_GROUP_OF_MUSICIANS