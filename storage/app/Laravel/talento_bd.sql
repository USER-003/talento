PGDMP  %                    |         
   talento_db    16.1    16.1 R    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    17115 
   talento_db    DATABASE     �   CREATE DATABASE talento_db WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Spanish_El Salvador.1252';
    DROP DATABASE talento_db;
                postgres    false                        3079    17410    pg_trgm 	   EXTENSION     ;   CREATE EXTENSION IF NOT EXISTS pg_trgm WITH SCHEMA public;
    DROP EXTENSION pg_trgm;
                   false            �           0    0    EXTENSION pg_trgm    COMMENT     e   COMMENT ON EXTENSION pg_trgm IS 'text similarity measurement and index searching based on trigrams';
                        false    3                        3079    17403    unaccent 	   EXTENSION     <   CREATE EXTENSION IF NOT EXISTS unaccent WITH SCHEMA public;
    DROP EXTENSION unaccent;
                   false            �           0    0    EXTENSION unaccent    COMMENT     P   COMMENT ON EXTENSION unaccent IS 'text search dictionary that removes accents';
                        false    2            �            1259    17306    cache    TABLE     �   CREATE TABLE public.cache (
    key character varying(255) NOT NULL,
    value text NOT NULL,
    expiration integer NOT NULL
);
    DROP TABLE public.cache;
       public         heap    postgres    false            �            1259    17313    cache_locks    TABLE     �   CREATE TABLE public.cache_locks (
    key character varying(255) NOT NULL,
    owner character varying(255) NOT NULL,
    expiration integer NOT NULL
);
    DROP TABLE public.cache_locks;
       public         heap    postgres    false            �            1259    17350    categorias_de_servicios    TABLE       CREATE TABLE public.categorias_de_servicios (
    id_categoria bigint NOT NULL,
    nombre_categoria character varying(255) NOT NULL,
    descripcion_categoria text NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 +   DROP TABLE public.categorias_de_servicios;
       public         heap    postgres    false            �            1259    17349 (   categorias_de_servicios_id_categoria_seq    SEQUENCE     �   CREATE SEQUENCE public.categorias_de_servicios_id_categoria_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ?   DROP SEQUENCE public.categorias_de_servicios_id_categoria_seq;
       public          postgres    false    231            �           0    0 (   categorias_de_servicios_id_categoria_seq    SEQUENCE OWNED BY     u   ALTER SEQUENCE public.categorias_de_servicios_id_categoria_seq OWNED BY public.categorias_de_servicios.id_categoria;
          public          postgres    false    230            �            1259    17338    failed_jobs    TABLE     &  CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.failed_jobs;
       public         heap    postgres    false            �            1259    17337    failed_jobs_id_seq    SEQUENCE     {   CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.failed_jobs_id_seq;
       public          postgres    false    229            �           0    0    failed_jobs_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;
          public          postgres    false    228            �            1259    17330    job_batches    TABLE     d  CREATE TABLE public.job_batches (
    id character varying(255) NOT NULL,
    name character varying(255) NOT NULL,
    total_jobs integer NOT NULL,
    pending_jobs integer NOT NULL,
    failed_jobs integer NOT NULL,
    failed_job_ids text NOT NULL,
    options text,
    cancelled_at integer,
    created_at integer NOT NULL,
    finished_at integer
);
    DROP TABLE public.job_batches;
       public         heap    postgres    false            �            1259    17321    jobs    TABLE     �   CREATE TABLE public.jobs (
    id bigint NOT NULL,
    queue character varying(255) NOT NULL,
    payload text NOT NULL,
    attempts smallint NOT NULL,
    reserved_at integer,
    available_at integer NOT NULL,
    created_at integer NOT NULL
);
    DROP TABLE public.jobs;
       public         heap    postgres    false            �            1259    17320    jobs_id_seq    SEQUENCE     t   CREATE SEQUENCE public.jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.jobs_id_seq;
       public          postgres    false    226            �           0    0    jobs_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.jobs_id_seq OWNED BY public.jobs.id;
          public          postgres    false    225            �            1259    17117 
   migrations    TABLE     �   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         heap    postgres    false            �            1259    17116    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public          postgres    false    218            �           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
          public          postgres    false    217            �            1259    17290    password_reset_tokens    TABLE     �   CREATE TABLE public.password_reset_tokens (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
 )   DROP TABLE public.password_reset_tokens;
       public         heap    postgres    false            �            1259    17385    servicios_personales    TABLE     �  CREATE TABLE public.servicios_personales (
    id_servicios_personales bigint NOT NULL,
    id_categoria bigint NOT NULL,
    id_usuario bigint NOT NULL,
    nombre_servicio character varying(255) NOT NULL,
    descripcion_servicio character varying(255) NOT NULL,
    precio numeric(10,2) NOT NULL,
    imagen character varying(255),
    numero_contacto text NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 (   DROP TABLE public.servicios_personales;
       public         heap    postgres    false            �            1259    17384 0   servicios_personales_id_servicios_personales_seq    SEQUENCE     �   CREATE SEQUENCE public.servicios_personales_id_servicios_personales_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 G   DROP SEQUENCE public.servicios_personales_id_servicios_personales_seq;
       public          postgres    false    235            �           0    0 0   servicios_personales_id_servicios_personales_seq    SEQUENCE OWNED BY     �   ALTER SEQUENCE public.servicios_personales_id_servicios_personales_seq OWNED BY public.servicios_personales.id_servicios_personales;
          public          postgres    false    234            �            1259    17297    sessions    TABLE     �   CREATE TABLE public.sessions (
    id character varying(255) NOT NULL,
    user_id bigint,
    ip_address character varying(45),
    user_agent text,
    payload text NOT NULL,
    last_activity integer NOT NULL
);
    DROP TABLE public.sessions;
       public         heap    postgres    false            �            1259    17280    users    TABLE     x  CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.users;
       public         heap    postgres    false            �            1259    17279    users_id_seq    SEQUENCE     u   CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          postgres    false    220            �           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public          postgres    false    219            �            1259    17374    usuarios    TABLE       CREATE TABLE public.usuarios (
    id_usuario bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    password text NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.usuarios;
       public         heap    postgres    false            �            1259    17373    usuarios_id_usuario_seq    SEQUENCE     �   CREATE SEQUENCE public.usuarios_id_usuario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.usuarios_id_usuario_seq;
       public          postgres    false    233            �           0    0    usuarios_id_usuario_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.usuarios_id_usuario_seq OWNED BY public.usuarios.id_usuario;
          public          postgres    false    232            �           2604    17353 $   categorias_de_servicios id_categoria    DEFAULT     �   ALTER TABLE ONLY public.categorias_de_servicios ALTER COLUMN id_categoria SET DEFAULT nextval('public.categorias_de_servicios_id_categoria_seq'::regclass);
 S   ALTER TABLE public.categorias_de_servicios ALTER COLUMN id_categoria DROP DEFAULT;
       public          postgres    false    231    230    231            �           2604    17341    failed_jobs id    DEFAULT     p   ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);
 =   ALTER TABLE public.failed_jobs ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    229    228    229            �           2604    17324    jobs id    DEFAULT     b   ALTER TABLE ONLY public.jobs ALTER COLUMN id SET DEFAULT nextval('public.jobs_id_seq'::regclass);
 6   ALTER TABLE public.jobs ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    226    225    226            �           2604    17120    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    217    218    218            �           2604    17388 ,   servicios_personales id_servicios_personales    DEFAULT     �   ALTER TABLE ONLY public.servicios_personales ALTER COLUMN id_servicios_personales SET DEFAULT nextval('public.servicios_personales_id_servicios_personales_seq'::regclass);
 [   ALTER TABLE public.servicios_personales ALTER COLUMN id_servicios_personales DROP DEFAULT;
       public          postgres    false    235    234    235            �           2604    17283    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    219    220    220            �           2604    17377    usuarios id_usuario    DEFAULT     z   ALTER TABLE ONLY public.usuarios ALTER COLUMN id_usuario SET DEFAULT nextval('public.usuarios_id_usuario_seq'::regclass);
 B   ALTER TABLE public.usuarios ALTER COLUMN id_usuario DROP DEFAULT;
       public          postgres    false    232    233    233            |          0    17306    cache 
   TABLE DATA           7   COPY public.cache (key, value, expiration) FROM stdin;
    public          postgres    false    223   �c       }          0    17313    cache_locks 
   TABLE DATA           =   COPY public.cache_locks (key, owner, expiration) FROM stdin;
    public          postgres    false    224   �c       �          0    17350    categorias_de_servicios 
   TABLE DATA           �   COPY public.categorias_de_servicios (id_categoria, nombre_categoria, descripcion_categoria, created_at, updated_at) FROM stdin;
    public          postgres    false    231   �c       �          0    17338    failed_jobs 
   TABLE DATA           a   COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
    public          postgres    false    229   �d       �          0    17330    job_batches 
   TABLE DATA           �   COPY public.job_batches (id, name, total_jobs, pending_jobs, failed_jobs, failed_job_ids, options, cancelled_at, created_at, finished_at) FROM stdin;
    public          postgres    false    227   �d                 0    17321    jobs 
   TABLE DATA           c   COPY public.jobs (id, queue, payload, attempts, reserved_at, available_at, created_at) FROM stdin;
    public          postgres    false    226   �d       w          0    17117 
   migrations 
   TABLE DATA           :   COPY public.migrations (id, migration, batch) FROM stdin;
    public          postgres    false    218    e       z          0    17290    password_reset_tokens 
   TABLE DATA           I   COPY public.password_reset_tokens (email, token, created_at) FROM stdin;
    public          postgres    false    221   �e       �          0    17385    servicios_personales 
   TABLE DATA           �   COPY public.servicios_personales (id_servicios_personales, id_categoria, id_usuario, nombre_servicio, descripcion_servicio, precio, imagen, numero_contacto, created_at, updated_at) FROM stdin;
    public          postgres    false    235   �e       {          0    17297    sessions 
   TABLE DATA           _   COPY public.sessions (id, user_id, ip_address, user_agent, payload, last_activity) FROM stdin;
    public          postgres    false    222   t       y          0    17280    users 
   TABLE DATA           u   COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) FROM stdin;
    public          postgres    false    220   �v       �          0    17374    usuarios 
   TABLE DATA           _   COPY public.usuarios (id_usuario, nombre, email, password, created_at, updated_at) FROM stdin;
    public          postgres    false    233   �v       �           0    0 (   categorias_de_servicios_id_categoria_seq    SEQUENCE SET     W   SELECT pg_catalog.setval('public.categorias_de_servicios_id_categoria_seq', 1, false);
          public          postgres    false    230            �           0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
          public          postgres    false    228            �           0    0    jobs_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.jobs_id_seq', 1, false);
          public          postgres    false    225            �           0    0    migrations_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.migrations_id_seq', 13, true);
          public          postgres    false    217            �           0    0 0   servicios_personales_id_servicios_personales_seq    SEQUENCE SET     `   SELECT pg_catalog.setval('public.servicios_personales_id_servicios_personales_seq', 135, true);
          public          postgres    false    234            �           0    0    users_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.users_id_seq', 1, false);
          public          postgres    false    219            �           0    0    usuarios_id_usuario_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.usuarios_id_usuario_seq', 4, true);
          public          postgres    false    232            �           2606    17319    cache_locks cache_locks_pkey 
   CONSTRAINT     [   ALTER TABLE ONLY public.cache_locks
    ADD CONSTRAINT cache_locks_pkey PRIMARY KEY (key);
 F   ALTER TABLE ONLY public.cache_locks DROP CONSTRAINT cache_locks_pkey;
       public            postgres    false    224            �           2606    17312    cache cache_pkey 
   CONSTRAINT     O   ALTER TABLE ONLY public.cache
    ADD CONSTRAINT cache_pkey PRIMARY KEY (key);
 :   ALTER TABLE ONLY public.cache DROP CONSTRAINT cache_pkey;
       public            postgres    false    223            �           2606    17357 4   categorias_de_servicios categorias_de_servicios_pkey 
   CONSTRAINT     |   ALTER TABLE ONLY public.categorias_de_servicios
    ADD CONSTRAINT categorias_de_servicios_pkey PRIMARY KEY (id_categoria);
 ^   ALTER TABLE ONLY public.categorias_de_servicios DROP CONSTRAINT categorias_de_servicios_pkey;
       public            postgres    false    231            �           2606    17346    failed_jobs failed_jobs_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_pkey;
       public            postgres    false    229            �           2606    17348 #   failed_jobs failed_jobs_uuid_unique 
   CONSTRAINT     ^   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);
 M   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_uuid_unique;
       public            postgres    false    229            �           2606    17336    job_batches job_batches_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.job_batches
    ADD CONSTRAINT job_batches_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.job_batches DROP CONSTRAINT job_batches_pkey;
       public            postgres    false    227            �           2606    17328    jobs jobs_pkey 
   CONSTRAINT     L   ALTER TABLE ONLY public.jobs
    ADD CONSTRAINT jobs_pkey PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.jobs DROP CONSTRAINT jobs_pkey;
       public            postgres    false    226            �           2606    17122    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public            postgres    false    218            �           2606    17296 0   password_reset_tokens password_reset_tokens_pkey 
   CONSTRAINT     q   ALTER TABLE ONLY public.password_reset_tokens
    ADD CONSTRAINT password_reset_tokens_pkey PRIMARY KEY (email);
 Z   ALTER TABLE ONLY public.password_reset_tokens DROP CONSTRAINT password_reset_tokens_pkey;
       public            postgres    false    221            �           2606    17392 .   servicios_personales servicios_personales_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.servicios_personales
    ADD CONSTRAINT servicios_personales_pkey PRIMARY KEY (id_servicios_personales);
 X   ALTER TABLE ONLY public.servicios_personales DROP CONSTRAINT servicios_personales_pkey;
       public            postgres    false    235            �           2606    17303    sessions sessions_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.sessions
    ADD CONSTRAINT sessions_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.sessions DROP CONSTRAINT sessions_pkey;
       public            postgres    false    222            �           2606    17289    users users_email_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public            postgres    false    220            �           2606    17287    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    220            �           2606    17383    usuarios usuarios_email_unique 
   CONSTRAINT     Z   ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT usuarios_email_unique UNIQUE (email);
 H   ALTER TABLE ONLY public.usuarios DROP CONSTRAINT usuarios_email_unique;
       public            postgres    false    233            �           2606    17381    usuarios usuarios_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY (id_usuario);
 @   ALTER TABLE ONLY public.usuarios DROP CONSTRAINT usuarios_pkey;
       public            postgres    false    233            �           1259    17329    jobs_queue_index    INDEX     B   CREATE INDEX jobs_queue_index ON public.jobs USING btree (queue);
 $   DROP INDEX public.jobs_queue_index;
       public            postgres    false    226            �           1259    17492 '   servicios_descripcion_servicio_trgm_idx    INDEX     �   CREATE INDEX servicios_descripcion_servicio_trgm_idx ON public.servicios_personales USING gin (descripcion_servicio public.gin_trgm_ops);
 ;   DROP INDEX public.servicios_descripcion_servicio_trgm_idx;
       public            postgres    false    235    3    3    3    3    3    3    3    3    3    3    3    3            �           1259    17491 "   servicios_nombre_servicio_trgm_idx    INDEX     �   CREATE INDEX servicios_nombre_servicio_trgm_idx ON public.servicios_personales USING gin (nombre_servicio public.gin_trgm_ops);
 6   DROP INDEX public.servicios_nombre_servicio_trgm_idx;
       public            postgres    false    3    3    3    3    3    3    3    3    3    3    3    3    235            �           1259    17305    sessions_last_activity_index    INDEX     Z   CREATE INDEX sessions_last_activity_index ON public.sessions USING btree (last_activity);
 0   DROP INDEX public.sessions_last_activity_index;
       public            postgres    false    222            �           1259    17304    sessions_user_id_index    INDEX     N   CREATE INDEX sessions_user_id_index ON public.sessions USING btree (user_id);
 *   DROP INDEX public.sessions_user_id_index;
       public            postgres    false    222            �           2606    17393 >   servicios_personales servicios_personales_id_categoria_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.servicios_personales
    ADD CONSTRAINT servicios_personales_id_categoria_foreign FOREIGN KEY (id_categoria) REFERENCES public.categorias_de_servicios(id_categoria) ON DELETE CASCADE;
 h   ALTER TABLE ONLY public.servicios_personales DROP CONSTRAINT servicios_personales_id_categoria_foreign;
       public          postgres    false    235    4828    231            �           2606    17398 <   servicios_personales servicios_personales_id_usuario_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.servicios_personales
    ADD CONSTRAINT servicios_personales_id_usuario_foreign FOREIGN KEY (id_usuario) REFERENCES public.usuarios(id_usuario) ON DELETE CASCADE;
 f   ALTER TABLE ONLY public.servicios_personales DROP CONSTRAINT servicios_personales_id_usuario_foreign;
       public          postgres    false    235    4832    233            |      x������ � �      }      x������ � �      �   �   x�}�;�0���9�+��.0v��6ʣ܉�#�b�4R��<Ŀ��s�ꂖ8��^�Θ�`g�0�<�,��D0em���ý)MoR}'�w�C�3��D�#�k �'�����U۔�簄�84�N�w�N�!��Ѹ$҇�����U]���~��� i/^�      �      x������ � �      �      x������ � �            x������ � �      w   �   x�u��
�0���a$�T�]��ՠ�a�?>�cX+��\~琜"�|w�ɴ��l)K�q2Gp^AjЫ���$7��co$r��<.�@c�,v�)h���|�;�������jꘁ�mܫ_�񩓵� � | ��X      z      x������ � �      �   M  x��Z�r��]s��M�Օ5�с�<0l��#�B*D�&40x������EG���?��J� ̽v�!�R!թ�<y2ˢ���X�D8�C���~��6r����P�w{E%p?*�dMw� {�
� \	Ba�AT�y��.����SO����ļ2}�'.�q���W�S�t�R�H��H�
���M&�p.z��ě��d�T�t��	��Ɋ�~�$AR8A��`���
�` H)<�ڝ�$o�xE{؋�u�!.`$&A��oV�b����	`��F�ـo��e�&՞�x?m���m������Ѯ��cɓ�9�3Ț*���*�%�,�� 	�)~3	p��w�B`���"\�0��7lDT(��׎�"�Bs~5�3`��p��y2ڸ�K�9�T젱�������S�R]n;�~ćQyFⲡ�:�o�Ṃ���ik�]I�d3�M�ia=_;��X���|�����R05�����<��=4�W~,�����z�Ѩ�϶�]��+�l�p.���w��j�%�;Q,H�wUߋ'N}F<���$H�o�� ���� �bA�B0}� (�}�l6WسC���Γ�,��	�p�9�3�/'�;���q�%�
湘�HXv!�Npgp��
Ą�2\'}.�i�[d�C
���SG��C�D�/�	�cx�������ȼ���(Q�m�"�G!TL� ���W�I��s��K��[t9"X���'�	{< ��[o����wqh�?*����LI,�p|_W/�g{=tu�]�+߮�zPZqVP�I�c�V�!�%Y�TM� �x�"~%� St(۰��o��������~��$�ǌEb�/7[����O��s=�y�n�c�zY�O�����Kdl��zB1.3�~��E0������
-lR�����<? 4N���y����<(��W~hS�⧎o��L���`[8���s�`����=�x�G[=eY`)�Ĝ��ÌT-d��;H&k}��F>&�y���Ǳ$�x��˲b�d�T�HeQ�Q�OY-2?0@:�L�R���5���Z����i	�{�+��R�p���*�>�y��H��X�Rh��yO�m�p��tE�5��r�G(��h��~ c����o�.�t��,x`���	�s0��{�F8pM�����
m�e��� m)�i�����)� ��~e�$x^�>�ؿ�"�S��5��q���m�E�&�r�����Sǯ}!�ղ�&g � P�MY:���Z�:L5.!cӓF7�m��e &�y[����e#�_��٠h>q@�,�72�=yd��.?@ ��Aܞ��!s3!� �����]Es? �C�3*�y�����+� f#�^�s;��nu�r}0�����C#�����뚡��B>��ZYր����1��=6*e�o��ɽ}b���C���/vh�5gS�c�yTn{=�;��7�;���e�y1��U�F��T���e@R�sv��P /B�̴+:�%]����t�#�7��w����`�<^�k����)�L �HS����"�A/P�p��+�ӅX"?��9hF�$<�V�|��ψ	*�R5Gs<B���z55���q��}�;WM����qC#���x���MD(@8�2��$.qL<��>��Te��0�����K�g���RU����OI���yA��#s��8@�Q���^.[c�����`BQgРֈ�����.-*^A�h2���4�������EGA/0�p��W��K�~��8�܎����#iC:}+��k�OCp)@�P^ѯa��O`X0ݰ�z}qtE��P��,�>W��BBcn�&7c���J&����f���}�޹֐���jB��U<F��d�0�BF��D�IPU�M=)�a�W$J��d�K"�R�$ER! �0��Ԕt�u]5��M�25ٚ����� >>�w����U�8��V���N(����5G��@�(S�3��T֊���du]�xK���pU&�MX����.��}��՞��� �+�)Q(�¼Ġ�^���<삯��젦[��ed�u���S��
%ZS\�l�!���ʤ�z�=�L�N۲n&3g�i*��#����j�� �w���Ԉ��a{�yB旵�B�N
�a�n��Qrד�z�$?��=��z��ii+*)�k�A�4\�	hi v7<��`:�|7z 2�� /�Q�n���^#�jE�HX��0\�Z����Q��TX�A��o����)͹�
��(��?�Ag�P�O/��b�ϔ_L�����x�W�*/
|���/�f��`��)��P�H��T���OC-��;\��Oo+�x��cT��~�gi�+��c&sHxț��g�_(�D���h9UaAN�2��v�R↠1�!e��V������|�KCm@���ӳT]v^��7��#C�l>�@ �L�"ÔkI��{��F�E����KX��;e���M��z%t��jK��h��;AU)UV��`���Y_��H��
����і�t=�t�����_+�Vm禮N��i�m����}�д��!���>�?�q.�;\����u�|Pss�r���nv2��;��=6�g�)�q_o,���0���sP�� J���n���D�{�mO�3��y4��fg-&
?�����w��1�<��W���9(�� ⤯4Z�D[I
k%���?�7E��	~rK���'�����lh$�O=2��� h_i|�t��w�"`�A��b'���y�s�Ӥ���?�c�C�.�~���J��9޺��j�f�kk�k�~��+�/h���*�������~q���ק]�
o@Sr��_�i�ר!=W����� �ܶG����g���Z�R��쯕-Cs�mQC@$��j�#�����5	�$��K,���F����dd���X������
Oݭ�\z0��vD��5]`��\��v�=��<M<N�<��P �ђ����1��Е���Q������7?�}uN��
�% =&�Ԣ 6c�,�Ġ+�޻�>��0��΃d���9m����u�g��j-�m%f�Qlb�-yG{C�5��H.�4=|��,�j6@v����*�U@&2d��I-��P��%�6	 Ի@�Y�;��O$��PM�J�6��[¥-�t����,SGԌ�1r�P	�(v9�~g@��
}b!GwI��=L�!מU<����e�"͞/��-L����x �\o���t��L�}|r�o�D�gz)�ا��= kL9���}���^W_������h2��.cnP�U;��!2tM=����� ��l�H`����eB:�#�H����<�Ȳ9�uF�fћ��� Ī2[�e��7K	P��Sq��' P��"g�Y:��;MN*�q�IEN��ed���u��34�=�EU��)���QR��XXA�4Ug3	���������	 ~�N~3�d��|"+�w�L��=��&���r� ��}vʤ��!��� Ih'�<j��OòP	h�
� �1��O�c0d�6�s}����I�9i5J\�	zȨ��_�5��˛�ά�!�����~��۷����      {   c  x���Ko�@���+�L�
<c3Ɗ� <�3��l������]Ҫ��U7�,F�G��O�CxR@l����k�-�)U:��w��v��8����`@e ��p�$����(<�I�w��h�'� �I���(LʒEv䯒j8���������/K�HТ +�i|.x4p��Av���|��\Z�$���Hg��Ê���M!�Y�����d�^�|�ZL,{)�zRHM��Q�yc��	m�QsF��#�,��˒��]B'��e�5�~M���A1�y,�/���k�x*_����䊧j�9Kx��җ�Ѕѳ�K�Y�@�m(�c� �T=���>�=^�<�}ӟ�_��g�R9:�H|nI�nL�	�$�� ]~_S�=:��J�f?r��1�"�4|s�%'t{�t/c�m35��fņ�o�,���ye�����d	��:�S�{�[t�Sݞ��9^���š ~����z���C�٘C �w�c��+a��^'����e"��)�㽱/��h~����d!���9�U8���d7��X)}�l�؅����zt=i�8�{w��w��]����ی�#�t��}ms�GG���CU�_�~��:�      y      x������ � �      �   w  x�m��r�0F��,�
!o�zA%^�RD�nb�@hA��6}�n}��Z�u{���gNT�Ò4�Ґ�O�\�'~�vD겄�����y�B����Gd�4�4](�ς
*��JS_)ek���~��LF�,v�p?	H��������{�4�%@ �"(�.��`�gL�f�w5�w��a{c2�1�?��������h�M�9~���gn���y�J��,3�T#@[JY��{���3&"g�K#���Y��z�L�yl����r�o#��۪�v�O��N�e8�8��0��txl�{	T��L�n_�+%l�t�����Z���`Ζ8Q�&�?���5ɔhAn���P2쪒�*�u��;���V�Z���&���kʺo     