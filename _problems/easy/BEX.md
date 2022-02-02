---
category_name: easy
problem_code: BEX
problem_name: 'Book Exercises'
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
problem_author: 'vinayak garg'
problem_tester: laycurse
date_added: 6-09-2012
tags:
    - dec12
    - easy
    - stack
    - vinayak
editorial_url: 'http://discuss.codechef.com/problems/BEX'
time:
    view_start_date: 1355221008
    submit_start_date: 1355221008
    visible_start_date: 1355218200
    end_date: 1735669800
    current: 1493558109
layout: problem
---
All submissions for this problem are available.Harry is a bright student. To prepare thoroughly for exams, he completes all the exercises in his book! Now that the exams are approaching fast, he is doing book exercises day and night. He writes down and keeps updating the remaining number of exercises on the back cover of each book.

Harry has a lot of books messed on the floor. Therefore, he wants to pile up the books **that still have some remaining exercises** into a single pile. He will grab the books one-by-one and add the books that still have remaining exercises to the top of the pile.

Whenever he wants to do a book exercise, he will pick the book with the minimum number of remaining exercises from the pile. In order to pick the book, he has to remove all the books above it. Therefore, if there are more than one books with the minimum number of remaining exercises, he will take the one which requires the least number of books to remove. The removed books are returned to the messy floor. After he picks the book, he will do all the remaining exercises and trash the book.

Since number of books is rather large, he needs your help to tell him the number of books he must remove, for picking the book with the minimum number of exercises.

Note that more than one book can have the same name.

### Input

The first line contains a single integer **N** denoting the number of actions. Then **N** lines follow. Each line starts with an integer. If the integer is -1, that means Harry wants to do a book exercise. Otherwise, the integer is number of the remaining exercises in the book he grabs next. This is followed by a string denoting the name of the book.

### Output

For each -1 in the input, output a single line containing the number of books Harry must remove, followed by the name of the book that Harry must pick.

### Constraints

1 &lt; **N** ≤ 1,000,000
 0 ≤ (the number of remaining exercises of each book) &lt; 100,000
 The name of each book consists of between 1 and 15 characters 'a' - 'z'.
 Whenever he wants to do a book exercise, there is at least one book in the pile.

### Example

<pre>
<b>Input:</b>
6
9 english
6 mathematics
8 geography
-1
3 graphics
-1

<b>Output:</b>
1 mathematics
0 graphics
</pre>