<?php

$pdo = new PDO('sqlite:banco');

$pdo->query('CREATE TABLE IF NOT EXISTS
                                  PET(
                                      ID INTEGER PRIMARY KEY,
                                      NAME TEXT,
                                      PERSONALIY TEXT,
                                      CITY TEXT,
                                      STATE TEXT,
                                      PROFILE_PICTURE TEXT,
                                      SPECIES TEXT,
                                      SIZE TEXT,
                                      STATUS TEXT,
                                      OWNER 
                                  );

                    CREATE TABLE IF NOT EXISTS
                                USER (
                                    ID INTEGER PRIMARY KEY,
                                    NAME,
                                    EMAIL,
                                    PASSWORD,
                                    ABAUT,
                                    PROFILE_PICTURE
                                )');

echo "Conectado";

