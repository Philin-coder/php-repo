PGDMP     9                    x         	   game_land    12.4    13.1 	               0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false                       0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false                       1262    19553 	   game_land    DATABASE     f   CREATE DATABASE game_land WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Russian_Russia.1251';
    DROP DATABASE game_land;
                postgres    false            ?            1259    19555    usver    TABLE     ?   CREATE TABLE sm.usver (
    id_usver integer NOT NULL,
    usver_pass character(50) NOT NULL,
    usver_login character(50) NOT NULL
);
    DROP TABLE sm.usver;
       sm         heap    postgres    false            ?            1259    19595    usver_id_usver_seq    SEQUENCE     ?   ALTER TABLE sm.usver ALTER COLUMN id_usver ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME sm.usver_id_usver_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);
            sm          postgres    false    203                      0    19555    usver 
   TABLE DATA           >   COPY sm.usver (id_usver, usver_pass, usver_login) FROM stdin;
    sm          postgres    false    203   N                  0    0    usver_id_usver_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('sm.usver_id_usver_seq', 53, true);
          sm          postgres    false    207            ?
           2606    19559    usver usver_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY sm.usver
    ADD CONSTRAINT usver_pkey PRIMARY KEY (id_usver);
 6   ALTER TABLE ONLY sm.usver DROP CONSTRAINT usver_pkey;
       sm            postgres    false    203               H  x???;N?0@??^?, ??g??yH4vBAD">??? *D????OqS????\96?i7?????#Z??9~?????5?n??n?????<??k9??S/q????1?<?T|?uw7?_?v????CN9%?T?SC??(?P?P?? *
?????`?.*?*?Pe?B?A?2U?? T?*?Pe?Z?ڌ?	Q??QPNA?TQUG??QepT??@??QepŲ??q?Eįծ????j????FmT???$??<S???}???G?'M̚Q??n?a%?]??:aD?BAvyÃ?????Gr??Ύ@1?N>?,??Vk??G?     