PGDMP     +                    x         	   game_land    12.4    13.1                0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false                       0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false                       1262    19553 	   game_land    DATABASE     f   CREATE DATABASE game_land WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Russian_Russia.1251';
    DROP DATABASE game_land;
                postgres    false            ?            1259    19570    tovar    TABLE     ?   CREATE TABLE sm.tovar (
    id_tovar integer NOT NULL,
    naim character(50) NOT NULL,
    opis character(50) NOT NULL,
    cost numeric(10,2) NOT NULL,
    photo character(150) NOT NULL
);
    DROP TABLE sm.tovar;
       sm         heap    postgres    false                      0    19570    tovar 
   TABLE DATA           >   COPY sm.tovar (id_tovar, naim, opis, cost, photo) FROM stdin;
    sm          postgres    false    206   \       ?
           2606    19574    tovar tovar_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY sm.tovar
    ADD CONSTRAINT tovar_pkey PRIMARY KEY (id_tovar);
 6   ALTER TABLE ONLY sm.tovar DROP CONSTRAINT tovar_pkey;
       sm            postgres    false    206                  x?????? ? ?     