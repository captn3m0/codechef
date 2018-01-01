---
category_name: easy
problem_code: MARBLEGF
problem_name: 'Funny Marbles'
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
problem_author: kuruma
problem_tester: gerald
date_added: 4-11-2013
tags:
    - dec13
    - easy
    - kuruma
editorial_url: 'http://discuss.codechef.com/problems/MARBLEGF'
time:
    view_start_date: 1387186200
    submit_start_date: 1387186200
    visible_start_date: 1387186200
    end_date: 1735669800
    current: 1493558165
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/DEC13/mandarin/MARBLEGF.pdf) and [Russian](http://www.codechef.com/download/translated/DEC13/russian/MARBLEGF.pdf).

### Story-line

Lira loves marbles very much and she especially loves to play with them with her school friends.

Today, Lira is very excited, as her mom said she would give her and her friends some new marbles for her to play with. She immediately requested her mom to give her the new marbles, but, her mom had some tricks kept up her sleeve:

Mom: "Not so fast, young girl!! These won't come for free! If you want to keep playing with them, you must prove you deserve them!!"

Lira: \***moans**\* "Alright, mom, what do I have to do now?"

(Yes, Lira's mom can be quite annoying)

Mom: "Well, you can assume that I have an array A of size **N** , where **N** is the total number of students I will give marbles to, and A\[i\] is the number of marbles each student initially has."

Lira: \***smiles slightly**\* "So you're feeling generous hum?"

Mom: "Well, not too generous... imagine I wanted to give more marbles to some of your school friends who do well on their exams, or, on the other hand take away some marbles from the greedier friends."

Lira: "Mom, c'mon that's too easy!!"

Mom: "Alright, so given a group of students, starting on student **i** and ending on student **j**, I want to know how many marbles they have together!"

Well, it turns out that Lira actually did solve this problem and she did it very efficiently!!

It's now your turn to solve the problem that Lira already did in a brilliant way!

### Formal description:

Lira is given array **A**, which contains elements between 1000 and 2000.

Three types of queries can be performed on this array: add a given value to a single element on it, subtract a given value from a single element on it and find the sum of the values between indexes i and j, i.e. A\[i\]+...+A\[j\]. Check input and example section for details.

### Input

The first line of the input contains two integers: **N** and **Q**, denoting respectively, the number of students that there are present to receive the marbles as a gift and the number of actions Lira's mom will perform.

These actions can be of three different types:

22. **S i j** - if the mom wants to find the sum of the number of marbles from students i to j.
23. **G i num\_marbles** - if the mom decides to give num\_marbles to student i
24. **T i num\_marbles** - if the mom decides to take away num\_marbles from student i
### Output

The output should contain as many lines as the number of queries S and it should contain the answer for each query on a separate line

### Constraints

- **2** ≤ **N** ≤ **1000000**
- **3** ≤ **Q** ≤ **50000**
- **The array is 0-indexed.**
- **1000** ≤ **A\[i\]** ≤ **2000**
- **A student can never have a negative value of marbles. (i.e. there's no data which can cause a student to have a negative value of marbles)**
- ≤ **i, j** ≤ **N-1**, and **i** ≤ **j** for the sum query
- **At any given time, it is assured that the maximum number of marbles each student can have (**num\_marbles**) never exceeds the size of the int data type.**

### Example

<pre><b>Input:</b>
<p>5 3
1000 1002 1003 1004 1005
S 0 2
G 0 3
S 0 2

<b>Output:</b>
3005
3008
</p>
</pre>