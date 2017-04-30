---
category_name: medium
problem_code: DECORATE
problem_name: 'Lucy and the Flowers'
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
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: white_king
date_added: 30-11-2012
tags:
    - burnside
    - dec13
    - hard
    - hashing
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/DECORATE'
time:
    view_start_date: 1387186200
    submit_start_date: 1387186200
    visible_start_date: 1387186200
    end_date: 1735669800
    current: 1493557619
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/DEC13/mandarin/DECORATE.pdf) and [Russian](http://www.codechef.com/download/translated/DEC13/russian/DECORATE.pdf).

The staff of one of the most famous ChefLand's restaurants have just received the news! A delegation from the neighbouring country is going to visit the restaurant. The staff want to make this visit exciting and pleasant. Lucy is also a member of the staff and among all the things that the staff want to do, her assignment is to arrange the flowers on the tables.

Generally, there are **26** kinds of flowers, a small latin letter corresponds to a single kind. Equal letters correspond to equal kinds. Different letters correspond to different kinds. According to the old ChefLand tradition, one can make a bouquet from some flowers only if it is a substring of some magic string **T**. ChefLands make bouquets in such a manner that the order of flowers in them is important. The restaurant has a tradition to decorate a single table with **N**, not necessary different, bouquets. Their order matters.

Some decorations look really similar. Generally, two arrangements (let's call them **A** and **B**) are similar if **B** is a cyclic shift of **A**, or **B** is a reversed cyclic shift of **A**. For example the sequence ("aba", "c", "b") is a cyclic shift of a sequence ("b", "aba", "c"), and the sequence ("c", "b", "a", "e", "d") is a reversed cyclic shift of a sequence ("a", "b", "c", "d", "e").

Now Lucy thinks that the most beautiful bouquets are "symmetric" ones. The bouquet is "symmetric" if the string that corresponds to the arrangement of flowers in it is a palindrome (it reads from left to right the same as from right to left).

So, she thinks that the decoration of the table will be especially beautiful if all the bouquets in it are "symmetric". But then, Lucy had realized that the number of such decorations of the tables can be less than the number of guests. She doesn't want to decorate two tables in a similar manner, so she would like to know the number of distinct decorations such that no two tables looks similar.

### Input

The first line of input consists of a single string **T**.

The second line of input consists of a single integer **N**.

### Output

Output the number of distinct decorations.

### Constraints

1 ≤ |**T**| ≤ 100000;

1 ≤ **N** ≤ 600;

String **T** consists only of lowercase English letters.

### Example

```

<b>Input:</b>
aba
4

<b>Output:</b>
21

```