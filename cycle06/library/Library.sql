CREATE DATABASE library;

USE library;

CREATE TABLE books (
    accession_no INT PRIMARY KEY,
    title VARCHAR(100),
    authors VARCHAR(100),
    edition VARCHAR(50),
    publisher VARCHAR(100)
);
