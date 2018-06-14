---
category_name: challenge
problem_code: CHEFJR
problem_name: 'Chef and Job and Rest'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - PERL6
    - TEXT
    - CLOJ
    - FS
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: berezin
problem_tester: null
date_added: 14-09-2014
tags:
    - berezin
    - challenge
    - feb16
    - greedy
editorial_url: 'http://discuss.codechef.com/problems/CHEFJR'
time:
    view_start_date: 1455528600
    submit_start_date: 1455528600
    visible_start_date: 1455528600
    end_date: 1735669800
    current: 1525454416
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/FEB16/mandarin/CHEFJR.pdf), [Russian](http://www.codechef.com/download/translated/FEB16/russian/CHEFJR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/FEB16/vietnamese/CHEFJR.pdf) as well.

Chef is working as a programmer. His job schedule is very interesting: he rests for **R0** minutes, works for some time, then rests for **R1** minutes, then works some more, and so on.

By the way, Chef has **M** books he wants to read. Each book has some given number of pages, and Chef reads one page per minute independent of which page of whichever book it is. Chef has two types of books to read: the first type are too interesting for an interrupted read and, therefore, need to be finished in one continuous reading session, that is, some **i**th resting period or a part of it. Books of the second type are more casual reads which can be split up in any way between different resting periods (read a few pages, then read another book or do the job, and continue later).

Chef is getting tired when switch, that is why each book can be read for some times only **once** per rest.

Let us take an example: If Chef has a rest period array **R = {4,1,1}**, and books types to read: (**1st**, **3** min), (**2nd**, **3** min). Chef can finish the first book in the first rest period (minutes from **1st** to **3rd**), and use the **4th** minute of first period, along with the second and third periods to finish the second book.

Some books are part of a series, and need to be read in order. In other words, some books can't be started until some other books are done. You are given this information in the form of pairwise dependencies, indicating that one book cannot be started before the other is finished. Chef promises that there are no cycles across these directed dependencies. Each book has a rating, expressed as a positive integer. When Chef finishes a book, his happiness increases by this number.

### Scoring

- For each test, your result will be defined as the sum of ratings of books you finish.
- The total score for a submission is the sum of the scores for all test cases.
- Your task is to maximize the total score.

### Input

- The first line of each test case contains three integers — **N** denoting the number of rest periods, **M** denoting the number of books, and **K** denoting the number of dependencies. The second line contains **N** space-separated integers **R1**, **R2**, …, **RN** denoting the duration of each period.
- Next **M** lines describe the books, with the **i**th line describing the **i**th book. Each line contains tree integers **Ti**, **Pi** and **Wi**. **Ti** is the type of the **i**th book. **Pi** is the number of pages in it. **Wi** is the rating of the book.
- Next **K** lines describe the inter-book dependencies. Each line contains two integers — **A** and **B** — denoting that book **A** should be finished before book **B** can be started. The books are indexed in the order of their description in the input.

### Output

- For each rest period, output a single line. The first integer in the line must be **K'**, the number of books you read (fully or partially) in this period. Follow this up with two integers for each book: **I** — the index of the book you chose (books are enumerated from **1** to **M** as they are given in input) and **W'** — the number of minutes you spent on it.
- You are not allowed two print one book twice in one line.
- You can't read the book if it is already finished. Sum of all **W'** in a line should not be bigger than the rest period duration.
- If you do nothing in a rest period, just print 0.
- Any book of the first type should occur at most once in the output. If Chef reads such a book, it should be done completely in one segment.
- Chef can't start book **B** until he finishes book **A** if there is a dependency **A**, **B** in the input.

### Constraints

- **1** ≤ **N**  ≤ **5\*104**
- **1** ≤  **M, K** ≤ **105**
- **20** ≤ **Ri**≤ **200**
- **10** ≤ **Pi**≤ **160**
- **1** ≤ **Ti** ≤ **2**
- **5** ≤ **Wi** ≤ **1600**
- **1** ≤ **A, B** ≤ **M**

### Example

<pre><b>Input:</b>
3 8 2
10 10 10
1 8 2
1 7 1
2 5 4
2 4 1
2 3 1
2 3 4
2 6 1
1 5 1
1 3
3 2

<b>Output:</b>
2 1 8 3 2
2 3 3 2 7
3 4 4 5 3 6 3
</pre>###  Test generation plan

Sum of **Ri**'s will be **rand(5 \* 105, 106)**. Sum of **Pi**'s will be **rand(3 \* sum of R's, 8 \* sum of R's)**. Let **Rmin** and **Rmax** denote the minimum and maximum values of **Ri**, respectively. **Rmin** will be **rand(20, 100).** **Rmax** will be **rand(Rmin + 50, 200)**. We will generate the number of pages of the books in an incremental fashion such that number of pages in a book will be **rand(Rmin / 2, Rmax\* 4 / 5)**.

There are total 4 types of test files, whose description is given below. Please note that the total number of books of type 2 in each test case will be rand(10, 20), unless stated otherwise.

- **Type 1** : We will generate a directed acyclic graph (DAG) encoding the dependencies of books. Each connected component of the DAG has rand(10, 50) vertices. The rating of a book depends on the number of pages in it and the minimum number of books that need to be finished before starting that particular book. The ratio of weight / number of pages will be in the range \[1, 10\] for books of the first type and \[0.5, 1\] for that of second type.
- **Type 2** : The DAG generator will be same as above. Rating of each book is computed as **rand(20,500)**.
- **Type 3** : Same as Type 1, but with no books of the second type.
- **Type 4** : Same as Type 1, except that the underlying DAG will be a collections of paths.

 We have 20 test files, 5 for each type. During the contest, your solution will run on all the test files. If your program gives WA/TLE/RE on any of the test files out of 20, it will be reported to you. On the other hand, if you get an AC, then the score reported to you is not the total score for all the files; instead, it is only the score for 4 test files, one of each type.
