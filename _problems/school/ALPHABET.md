---
category_name: school
problem_code: ALPHABET
problem_name: 'Studying Alphabet'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: harshil7924
date_added: 6-08-2016
tags:
    - cakewalk
    - implementation
    - ltime39
    - strings
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/ALPHABET'
time:
    view_start_date: 1472317200
    submit_start_date: 1472317200
    visible_start_date: 1472317200
    end_date: 1735669800
    current: 1492506743
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME39/mandarin/ALPHABET.pdf), [Russian](http://www.codechef.com/download/translated/LTIME39/russian/ALPHABET.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME39/vietnamese/ALPHABET.pdf) as well.

Not everyone probably knows that Chef has younder brother Jeff. Currently Jeff learns to read.

He knows some subset of the letter of Latin alphabet. In order to help Jeff to study, Chef gave him a book with the text consisting of **N** words. Jeff can read a word iff it consists only of the letters he knows.

Now Chef is curious about which words his brother will be able to read, and which are not. Please help him!

### Input

The first line of the input contains a lowercase Latin letter string **S**, consisting of the letters Jeff can read. Every letter will appear in **S** no more than once.

The second line of the input contains an integer **N** denoting the number of words in the book.

Each of the following **N** lines contains a single lowecase Latin letter string **Wi**, denoting the **i**th word in the book.

### Output

For each of the words, output "Yes" (without quotes) in case Jeff can read it, and "No" (without quotes) otherwise.

### Constraints

- **1** ≤ **|S|** ≤ **26**
- **1** ≤ **N** ≤ **1000**
- **1** ≤ **|Wi|** ≤ **12**
- Each letter will appear in **S** no more than once.
- **S, Wi** consist only of lowercase Latin letters.

### Subtasks

- **Subtask #1 (31 point)**: **|S|** = **1**, i.e. Jeff knows only one letter.
- **Subtask #2 (69 point)** : no additional constraints

### Example

```
<b>Input:</b>
<tt>act
2
cat
dog</tt>

<b>Output:</b>
<tt>Yes
No</tt>

```
### Explanation

The first word can be read.

The second word contains the letters d, o and g that aren't known by Jeff.