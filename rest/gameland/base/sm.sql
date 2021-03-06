PGDMP                         x         	   game_land    12.4    13.1                0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false                       0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false                       1262    19553 	   game_land    DATABASE     f   CREATE DATABASE game_land WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Russian_Russia.1251';
    DROP DATABASE game_land;
                postgres    false                        2615    19554    sm    SCHEMA        CREATE SCHEMA sm;
    DROP SCHEMA sm;
                postgres    false            ?            1259    19565    klient    TABLE     ?   CREATE TABLE sm.klient (
    id_klient integer NOT NULL,
    klient_fio character(150) NOT NULL,
    klient_mail character(150) NOT NULL,
    id_usver integer NOT NULL
);
    DROP TABLE sm.klient;
       sm         heap    postgres    false    8            ?            1259    19570    tovar    TABLE     ?   CREATE TABLE sm.tovar (
    id_tovar integer NOT NULL,
    naim character(50) NOT NULL,
    opis character(50) NOT NULL,
    cost numeric(10,2) NOT NULL,
    photo character(150) NOT NULL
);
    DROP TABLE sm.tovar;
       sm         heap    postgres    false    8            ?            1259    19555    usver    TABLE     ?   CREATE TABLE sm.usver (
    id_usver integer NOT NULL,
    usver_pass character(50) NOT NULL,
    usver_login character(50) NOT NULL
);
    DROP TABLE sm.usver;
       sm         heap    postgres    false    8            ?            1259    19595    usver_id_usver_seq    SEQUENCE     ?   ALTER TABLE sm.usver ALTER COLUMN id_usver ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME sm.usver_id_usver_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);
            sm          postgres    false    8    203            ?            1259    19560    zakaz    TABLE     ?   CREATE TABLE sm.zakaz (
    id_zakaz integer NOT NULL,
    id_tovar integer NOT NULL,
    oplata numeric(10,2) NOT NULL,
    id_klient integer NOT NULL
);
    DROP TABLE sm.zakaz;
       sm         heap    postgres    false    8                      0    19565    klient 
   TABLE DATA           J   COPY sm.klient (id_klient, klient_fio, klient_mail, id_usver) FROM stdin;
    sm          postgres    false    205   ?                 0    19570    tovar 
   TABLE DATA           >   COPY sm.tovar (id_tovar, naim, opis, cost, photo) FROM stdin;
    sm          postgres    false    206   ?                 0    19555    usver 
   TABLE DATA           >   COPY sm.usver (id_usver, usver_pass, usver_login) FROM stdin;
    sm          postgres    false    203                    0    19560    zakaz 
   TABLE DATA           B   COPY sm.zakaz (id_zakaz, id_tovar, oplata, id_klient) FROM stdin;
    sm          postgres    false    204   h                   0    0    usver_id_usver_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('sm.usver_id_usver_seq', 53, true);
          sm          postgres    false    207            ?
           2606    19569    klient klient_pkey 
   CONSTRAINT     S   ALTER TABLE ONLY sm.klient
    ADD CONSTRAINT klient_pkey PRIMARY KEY (id_klient);
 8   ALTER TABLE ONLY sm.klient DROP CONSTRAINT klient_pkey;
       sm            postgres    false    205            ?
           2606    19574    tovar tovar_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY sm.tovar
    ADD CONSTRAINT tovar_pkey PRIMARY KEY (id_tovar);
 6   ALTER TABLE ONLY sm.tovar DROP CONSTRAINT tovar_pkey;
       sm            postgres    false    206            ?
           2606    19559    usver usver_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY sm.usver
    ADD CONSTRAINT usver_pkey PRIMARY KEY (id_usver);
 6   ALTER TABLE ONLY sm.usver DROP CONSTRAINT usver_pkey;
       sm            postgres    false    203            ?
           2606    19564    zakaz zakaz_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY sm.zakaz
    ADD CONSTRAINT zakaz_pkey PRIMARY KEY (id_zakaz);
 6   ALTER TABLE ONLY sm.zakaz DROP CONSTRAINT zakaz_pkey;
       sm            postgres    false    204            ?
           2606    19585    zakaz id_klient    FK CONSTRAINT     ?   ALTER TABLE ONLY sm.zakaz
    ADD CONSTRAINT id_klient FOREIGN KEY (id_klient) REFERENCES sm.klient(id_klient) ON UPDATE CASCADE ON DELETE CASCADE NOT VALID;
 5   ALTER TABLE ONLY sm.zakaz DROP CONSTRAINT id_klient;
       sm          postgres    false    204    205    2705            ?
           2606    19590    zakaz id_tovar    FK CONSTRAINT     ?   ALTER TABLE ONLY sm.zakaz
    ADD CONSTRAINT id_tovar FOREIGN KEY (id_tovar) REFERENCES sm.tovar(id_tovar) ON UPDATE CASCADE ON DELETE CASCADE NOT VALID;
 4   ALTER TABLE ONLY sm.zakaz DROP CONSTRAINT id_tovar;
       sm          postgres    false    204    2707    206            ?
           2606    19575    klient id_usver    FK CONSTRAINT     ?   ALTER TABLE ONLY sm.klient
    ADD CONSTRAINT id_usver FOREIGN KEY (id_usver) REFERENCES sm.usver(id_usver) ON UPDATE CASCADE ON DELETE CASCADE NOT VALID;
 5   ALTER TABLE ONLY sm.klient DROP CONSTRAINT id_usver;
       sm          postgres    false    203    205    2701                  x?????? ? ?            x?????? ? ?         H  x???;N?0@??^?, ??g??yH4vBAD">??? *D????OqS????\96?i7?????#Z??9~?????5?n??n?????<??k9??S/q????1?<?T|?uw7?_?v????CN9%?T?SC??(?P?P?? *
?????`?.*?*?Pe?B?A?2U?? T?*?Pe?Z?ڌ?	Q??QPNA?TQUG??QepT??@??QepŲ??q?Eįծ????j????FmT???$??<S???}???G?'M̚Q??n?a%?]??:aD?BAvyÃ?????Gr??Ύ@1?N>?,??Vk??G?            x?????? ? ?     