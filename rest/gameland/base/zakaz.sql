PGDMP     ;                    x         	   game_land    12.4    13.1 	               0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false                       0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false                       1262    19553 	   game_land    DATABASE     f   CREATE DATABASE game_land WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Russian_Russia.1251';
    DROP DATABASE game_land;
                postgres    false            ?            1259    19560    zakaz    TABLE     ?   CREATE TABLE sm.zakaz (
    id_zakaz integer NOT NULL,
    id_tovar integer NOT NULL,
    oplata numeric(10,2) NOT NULL,
    id_klient integer NOT NULL
);
    DROP TABLE sm.zakaz;
       sm         heap    postgres    false            
          0    19560    zakaz 
   TABLE DATA           B   COPY sm.zakaz (id_zakaz, id_tovar, oplata, id_klient) FROM stdin;
    sm          postgres    false    204   	       ?
           2606    19564    zakaz zakaz_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY sm.zakaz
    ADD CONSTRAINT zakaz_pkey PRIMARY KEY (id_zakaz);
 6   ALTER TABLE ONLY sm.zakaz DROP CONSTRAINT zakaz_pkey;
       sm            postgres    false    204            ?
           2606    19585    zakaz id_klient    FK CONSTRAINT     ?   ALTER TABLE ONLY sm.zakaz
    ADD CONSTRAINT id_klient FOREIGN KEY (id_klient) REFERENCES sm.klient(id_klient) ON UPDATE CASCADE ON DELETE CASCADE NOT VALID;
 5   ALTER TABLE ONLY sm.zakaz DROP CONSTRAINT id_klient;
       sm          postgres    false    204            ?
           2606    19590    zakaz id_tovar    FK CONSTRAINT     ?   ALTER TABLE ONLY sm.zakaz
    ADD CONSTRAINT id_tovar FOREIGN KEY (id_tovar) REFERENCES sm.tovar(id_tovar) ON UPDATE CASCADE ON DELETE CASCADE NOT VALID;
 4   ALTER TABLE ONLY sm.zakaz DROP CONSTRAINT id_tovar;
       sm          postgres    false    204            
      x?????? ? ?     