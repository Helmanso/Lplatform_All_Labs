<?php

  $db = new SQLite3('Database.db', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);

  $db->query('CREATE TABLE IF NOT EXISTS "news" (
    "id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    "title" VARCHAR,
    "content" VARCHAR)');

  $db->exec('BEGIN');
  $db->query('INSERT INTO "news" ("title", "content") VALUES("Article 1", "Six started far placing saw respect females old. Civilly why how end viewing attempt related enquire visitor. Man particular insensible celebrated conviction stimulated principles day. Sure fail or in said west. Right my front it wound cause fully am sorry if. She jointure goodness interest debating did outweigh. Is time from them full my gone in went. Of no introduced am literature excellence mr stimulated contrasted increasing. Age sold some full like rich new. Amounted repeated as believed in confined juvenile. ")');
  $db->query('INSERT INTO "news" ("title", "content") VALUES("Article 2", "An so vulgar to on points wanted. Not rapturous resolving continued household northward gay. He it otherwise supported instantly. Unfeeling agreeable suffering it on smallness newspaper be. So come must time no as. Do on unpleasing possession as of unreserved. Yet joy exquisite put sometimes enjoyment perpetual now. Behind lovers eat having length horses vanity say had its. ")');
  $db->query('INSERT INTO "news" ("title", "content") VALUES("Article 3", "Speedily say has suitable disposal add boy. On forth doubt miles of child. Exercise joy man children rejoiced. Yet uncommonly his ten who diminution astonished. Demesne new manners savings staying had. Under folly balls death own point now men. Match way these she avoid see death. She whose drift their fat off. ")');
  $db->exec('COMMIT');
  $db->close()

?>