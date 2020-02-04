CREATE TABLE public.user (
   id             SERIAL         NOT NULL    PRIMARY KEY,
   username       VARCHAR(100)   NOT NULL    UNIQUE,
   password       VARCHAR(100)   NOT NULL,
   display_name   VARCHAR(100)   NOT NULL
);

CREATE TABLE public.speaker (
   id    SERIAL         NOT NULL    PRIMARY KEY,
   name  VARCHAR(100)   NOT NULL
);

CREATE TABLE public.conference (
   id          SERIAL      NOT NULL    PRIMARY KEY,
   year        SMALLINT    NOT NULL, 
   is_saturday BOOLEAN     NOT NULL,
   is_morning  BOOLEAN     NOT NULL, 
   is_spring   BOOLEAN     NOT NULL
);

CREATE TABLE public.note (
   id             SERIAL   NOT NULL    PRIMARY KEY,
   user_id        INT      NOT NULL    REFERENCES        public.user(id),
   speaker_id     INT      NOT NULL    REFERENCES        public.speaker(id),
   conference_id  INT      NOT NULL    REFERENCES        public.conference(id),
   content        TEXT     NOT NULL
);

INSERT INTO public.user (username, password, display_name)
VALUES ('elkinty', 'february', 'Tyler Elkington');

INSERT INTO public.speaker (name)
VALUES ('Elder Bednar');

INSERT INTO public.conference (year, is_saturday, is_morning, is_spring)
VALUES ('2019', TRUE, FALSE, FALSE);

INSERT INTO public.conference (year, is_saturday, is_morning, is_spring)
VALUES ('2019', FALSE, FALSE, TRUE);

INSERT INTO public.conference (year, is_saturday, is_morning, is_spring)
VALUES ('2018', TRUE, TRUE, FALSE);

INSERT INTO public.note (user_id, speaker_id, conference_id, content)
VALUES ('1', '1', '1', 'This is note 1 for session 1');

INSERT INTO public.note (user_id, speaker_id, conference_id, content)
VALUES ('1', '1', '1', 'This is note 2 for session 1');

INSERT INTO public.note (user_id, speaker_id, conference_id, content)
VALUES ('1', '1', '2', 'This is note 1 for session 2');

INSERT INTO public.note (user_id, speaker_id, conference_id, content)
VALUES ('1', '1', '2', 'This is note 2 for session 2');

INSERT INTO public.note (user_id, speaker_id, conference_id, content)
VALUES ('1', '1', '3', 'This is note 1 for session 3');

INSERT INTO public.note (user_id, speaker_id, conference_id, content)
VALUES ('1', '1', '3', 'This is note 2 for session 3');

SELECT * FROM note;
SELECT * FROM public.user;
SELECT * FROM public.speaker;