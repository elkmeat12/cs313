\echo '2a. How many events are there?'
SELECT COUNT(id) AS "count"
FROM w5_EVENT;

\echo '2b. How many participants are there?'
SELECT COUNT(id) AS "count"
FROM w5_PARTICIPANT;

\echo '3a. What is the third event when sorted alphabetically (by name)? '
SELECT name FROM w5_EVENT
ORDER BY name
LIMIT 1 OFFSET 2;

\echo '3b. What is the third event when sorted by ID? '
SELECT name FROM w5_EVENT
ORDER BY id
LIMIT 1 OFFSET 2;

\echo '4a. List the names alphabetically of all the participants in the ''Toughman Utah'' competition'
SELECT p.name FROM w5_PARTICIPANT p 
JOIN w5_EVENT_PARTICIPANT e1 ON p.id = e1.participant_id
JOIN w5_EVENT e2 ON e1.event_id = e2.id
WHERE e2.name = 'Toughman Utah'
ORDER BY p.name; 

\echo '4b. List the names (sorted by id) of all the participants in the ''Kauai Marathon'' competition'
SELECT p.name FROM w5_PARTICIPANT p 
JOIN w5_EVENT_PARTICIPANT e1 ON p.id = e1.participant_id
JOIN w5_EVENT e2 ON e1.event_id = e2.id
WHERE e2.name = 'Kauai Marathon'
ORDER BY p.id; 

\echo '5a. How many competitions has ''Black Panther'' competed in?'
SELECT COUNT(e.id) FROM w5_EVENT_PARTICIPANT e
JOIN w5_PARTICIPANT p ON e.participant_id = p.id 
WHERE p.name = 'Black Panther';

\echo '5b. How can you verify that your count is correct?'  
SELECT id, name FROM w5_PARTICIPANT
WHERE name = 'Black Panther';

SELECT * FROM w5_EVENT_PARTICIPANT
WHERE participant_id=32;

-- \echo '5c. Who has competed in the most competitions? How many have they competed in?'
SELECT p.name, COUNT(ep.id) FROM w5_EVENT_PARTICIPANT ep 
JOIN w5_PARTICIPANT p ON ep.participant_id = p.id
GROUP BY p.name, ep.participant_id
ORDER BY COUNT(ep.participant_id) DESC
LIMIT 1;

\echo '5d. Who has competed in the least competitions? How many have they competed in?'
SELECT p.name, COUNT(ep.id) FROM w5_EVENT_PARTICIPANT ep 
JOIN w5_PARTICIPANT p ON ep.participant_id = p.id
GROUP BY p.name, ep.participant_id
ORDER BY COUNT(ep.participant_id) ASC
LIMIT 1;

-- \echo '5d. people who have competed in 1 or more'
---------------- Your code here ----------------

-- \echo '5d. - people that didn''t compete in any'
---------------- Your code here ----------------

-- \echo '6a. Is there anyone who has competed in the same competition twice? '
---------------- Your code here ----------------

-- \echo '6b. Which event had the most competitors? '
---------------- Your code here ----------------

-- \echo '6c. Which event had the least competitors? '
---------------- Your code here ----------------

-- \echo '6d. List all competitors that competed in the same event at least once '
---------------- Your code here ----------------
