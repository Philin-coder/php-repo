PGDMP                         x         	   game_land    12.4    13.1                0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false                       0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false                       1262    19553 	   game_land    DATABASE     f   CREATE DATABASE game_land WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Russian_Russia.1251';
    DROP DATABASE game_land;
                postgres    false            ?            1259    19565    klient    TABLE     ?   CREATE TABLE sm.klient (
    id_klient integer NOT NULL,
    klient_fio character(150) NOT NULL,
    klient_mail character(150) NOT NULL,
    id_usver integer NOT NULL
);
    DROP TABLE sm.klient;
       sm         heap    postgres    false            	          0    19565    klient 
   TABLE DATA           J   COPY sm.klient (id_klient, klient_fio, klient_mail, id_usver) FROM stdin;
    sm          postgres    false    205   ?       ?
           2606    19569    klient klient_pkey 
   CONSTRAINT     S   ALTER TABLE ONLY sm.klient
    ADD CONSTRAINT klient_pkey PRIMARY KEY (id_klient);
 8   ALTER TABLE ONLY sm.klient DROP CONSTRAINT klient_pkey;
       sm            postgres    false    205            ?
           2606    19575    klient id_usver    FK CONSTRAINT     ?   ALTER TABLE ONLY sm.klient
    ADD CONSTRAINT id_usver FOREIGN KEY (id_usver) REFERENCES sm.usver(id_usver) ON UPDATE CASCADE ON DELETE CASCADE NOT VALID;
 5   ALTER TABLE ONLY sm.klient DROP CONSTRAINT id_usver;
       sm          postgres    false    205            	      x?????? ? ?     