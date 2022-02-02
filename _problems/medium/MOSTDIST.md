---
category_name: medium
problem_code: MOSTDIST
problem_name: 'Most Distant Points'
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
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: kostya_by
problem_tester: null
date_added: 24-10-2014
tags:
    - cook52
    - easy
    - geometry
    - heap
    - kostya_by
    - manhattan
editorial_url: 'http://discuss.codechef.com/problems/MOSTDIST'
time:
    view_start_date: 1416768043
    submit_start_date: 1416768043
    visible_start_date: 1416767794
    end_date: 1735669800
    current: 1493557807
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK52/mandarin/MOSTDIST.pdf) and [Russian](http://www.codechef.com/download/translated/COOK52/russian/MOSTDIST.pdf) as well.

 Let's consider a set of points **S**. Initially, **S** is an empty set. Your task is to implement a data structure that can process the following queries efficiently:

- "+ **X** **Y**" - add a new point **P** with coordinates (**X**, **Y**) to **S**. It's guaranteed that this point will not be in **S**.
- "- **N**" - remove a point that was added during the **N**'th adding query from **S**. All of the adding queries are numbered in the order of their appearance starting from 1 (queries of other types are not included). It's guaranteed that this point is in **S**.
- "? **X** **Y**" - calculate the maximal Manhattan distance between a point **P** with coordinates (**X**, **Y**) and any point from **S**. It's guaranteed that **S** will not be empty.

 In addition, you won't be given the exact query data, but instead should decode it in the following way:

 Let's store the result of the last processed query of the third type in a variable called **ANSWER**. Initially, **ANSWER** is equal to 0. You will be given **X'**, **Y'** and **N'** instead of the real values of **X**, **Y** and **N**. To get the real data you should perform the following computations:

- **X** = **X'** xor **ANSWER**;
- **Y** = **Y'** xor **ANSWER**;
- **N** = **N'** xor **ANSWER**.

 Don't forget to update the value of **ANSWER** after processing each query of the third type.

### Note

 Maybe some of you aren't familiar with some terms in the statement. Here are some articles that could help you understand the problem correctly:

- XOR operation: [http://en.wikipedia.org/wiki/Exclusive\_or](http://en.wikipedia.org/wiki/Exclusive_or)
- Manhattan distance: [http://en.wikipedia.org/wiki/Taxicab\_geometry](http://en.wikipedia.org/wiki/Taxicab_geometry)

### Input

 The first line of the input contains one integer **Q** denoting the number of queries to process.

 Each of the next **Q** lines contains a query to process in the format described above.

### Output

 For each query on the third type you should output your answer on a new line.

### Constraints

1 ≤ **Q** ≤ 500,000(5 × 105);

0 ≤ **X'**, **Y'**, **N'** &lt; 231 for each query;

0 ≤ **X**, **Y** ≤ 109 for each query.

### Example

<pre><b>Input:</b>
10
+ 8 1
- 1
+ 3 9
? 8 4
? 8 8
? 12 0
+ 6 5
? 7 8
? 4 5
- 9

<b>Output:</b>
10
8
2
4
11

</pre>
### Explanations

Here's a non-encrypted version of the example:

<pre>
10
+ 8 1
- 1
+ 3 9
? 8 4
? 2 2
? 4 8
+ 4 7
? 5 10
? 0 1
- 2
</pre>
The answers are the same.
