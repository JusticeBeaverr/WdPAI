create sequence archive_events_id_seq
    maxvalue 2147483647;

alter sequence archive_events_id_seq owner to dbuser;

create sequence projects_id_seq
    maxvalue 2147483647;

alter sequence projects_id_seq owner to dbuser;

create sequence table_name_id_seq
    maxvalue 2147483647;

alter sequence table_name_id_seq owner to dbuser;

create sequence user_details_id_seq
    maxvalue 2147483647;

alter sequence user_details_id_seq owner to dbuser;

create sequence users_id_seq
    maxvalue 2147483647;

alter sequence users_id_seq owner to dbuser;

create table if not exists events
(
    id             integer      default nextval('projects_id_seq'::regclass) not null,
    title          varchar(100)                                              not null,
    description    text,
    "like"         integer      default 0,
    dislike        integer      default 0,
    uncertain      integer      default 0,
    id_assigned_by integer                                                   not null,
    date           date,
    image          varchar(255) default 'public/img/uploads/default.svg'::character varying,
    location       varchar(100)
);

alter table events
    owner to dbuser;

create table if not exists user_details
(
    id       integer default nextval('user_details_id_seq'::regclass) not null,
    name     varchar(100)                                             not null,
    lastname varchar(100)                                             not null,
    email    varchar(255)                                             not null,
    admin    boolean default false                                    not null
);

alter table user_details
    owner to dbuser;

create table if not exists users
(
    id              integer default nextval('table_name_id_seq'::regclass) not null,
    username        varchar(100)                                           not null,
    password        varchar(255)                                           not null,
    id_user_details integer                                                not null
);

alter table users
    owner to dbuser;

create table if not exists users_events
(
    id_user  integer               not null,
    id_event integer               not null,
    flag     boolean default false not null
);

alter table users_events
    owner to dbuser;

















