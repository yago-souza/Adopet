<?php

$pdo = new PDO('sqlite:banco.sqlite');
/* $pdo->query('CREATE TABLE IF NOT EXISTS
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
                                  );');*/
/*
$pdo->query("CREATE TABLE IF NOT EXISTS
                                TBL_USER (
                                    ID INTEGER PRIMARY KEY,
                                    NAME,
                                    EMAIL,
                                    PASSWORD,
                                    ABOUT,
                                    PROFILE_PICTURE
                                );");*/
/*
$pdo->query("INSERT INTO
                                USER (
                                    NAME,
                                    EMAIL,
                                    PASSWORD,
                                    ABAUT,
                                    PROFILE_PICTURE
                                )
                                VALUES (
                                        'Yago',
                                        'yago-souza@live.com',
                                        '1234',
                                        '',
                                        ''
                                        );
");
$pdo->query("DELETE FROM USER;"); */
$statement = $pdo->query("SELECT * FROM TBL_USER;");
#var_dump($statement->fetchAll(PDO::FETCH_ASSOC));
echo "Conectado";

