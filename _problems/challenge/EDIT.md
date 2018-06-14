---
category_name: challenge
problem_code: EDIT
problem_name: 'Edit Distance Revisited'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
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
    - 'SCM chicken'
    - CLOJ
    - FS
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: null
date_added: 5-11-2016
tags:
    - xcwgf666
time:
    view_start_date: 1481535000
    submit_start_date: 1481535000
    visible_start_date: 1481535000
    end_date: 1735669800
    current: 1525199662
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/DEC16/mandarin/EDIT.pdf), [Russian](http://www.codechef.com/download/translated/DEC16/russian/EDIT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/DEC16/vietnamese/EDIT.pdf) as well.

Sergey has an uppercase Latin letter string **S**, which he wants to make equal to another uppercase Latin letter string **T**.

However, he is only allowed to do the following kinds of operations on the string **S**:

- To insert a symbol everywhere in the string **S** at any position. The operation costs **I** rubles.
- To delete a symbol from everywhere of the string **S**. The operation costs for **D** rubles.
- To replace one symbol in **S** with another one. This operation costs **Ra, b** rubles, where **x** is the old symbol and **y** is the new one.
- To swap any pair of symbols in the string **S**. This operation costs **W** rubles.

Sergey is a poor student, so he is looking for the cheapest way to obtain his target string **T**. Please help him! Note that in this problem, your solution doesn't have to be completely precise, but better approach will bring you more points.

### Input

The first line of input contains a single integer **Tn**, denoting the number of test cases. Then, **Tn** description of test cases follow.

The first line of every description contains a single uppercase Latin letter string **S**, denoting the string Sergey initially has.

The next line contains a single uppercase Latin letter string **T**, denoting the string Sergey wants to obtain.

The next line contains three space-separated integers **I**, **D**, **W**, denoting the cost of insertion, deletion and swap respectively.

Each of the following **26** lines contains **26** integer numbers, denoting the matrix **Ra, b**. The **j**th number in the **i**th line denotes the cost of the replacement of the **i**th Latin alphabet letter with the **j**th Latin alphabet letter.

### Output

For each test case, output the sequence of operations in the following form.

On the first line output an integer **Q**, denoting the number of operations you're going to make. It shouldn't exceed **|S|+|T|**.

On the following **Q** lines output the operations in the following format:

- **I p c**: insert the character **c** right after the **p**th character (1-indexed). Use **p=0**, when you want to insert the character before all existing characters.
- **D p**: delete the character on the **p**th position (**1**-indexed) in the string.
- **R p c**: replace the character on the **p**th position with a character **c**.
- **S i j**: swap the characters at the **i**th and the **j**th positions.

### Constraints

- DataSet #1 (5 test files): **Tn** = **100**, **900** ≤ **|S|, |T|** ≤ **1000**
- DataSet #2 (5 test files): **Tn** = **10**, **9000** ≤ **|S|, |T|** ≤ **10000**
- DataSet #3 (5 test files): **Tn** = **2**, **45000** ≤ **|S|, |T|** ≤ **50000**
- DataSet #4 (5 test files): **Tn** = **1**, **99000** ≤ **|S|, |T|** ≤ **100000**
- Each character of **S** and **T** is chosen randomly from the set of uppercase Latin letters, independently of other characters.
- In all datasets the values of **|S|, |T|** are chosen randomly and independently from the allowed ranges.
- **1000** ≤ **Ri, j** ≤ **10000**, **Ri, i** = 0. Initially, the weights of **Ri, j** are picked from the specified range, and then the matrix **R** was replaced with its' transitive closure.
- The triangle inequality holds on the matrix **R**.
- **Rmin × 1.5** ≤ **I**, **D**, **W** ≤ **Rmax**. The values of **I**, **D**, **W** are chosen randomly and independently from the specified range.

### Scoring

For every test case, your score will be equal to the sum of the costs of all the operations, divided by **|S| + |T|**.

For every test file, your score will be equal to the average of the scores of all the test cases in this file.

Please note that during the contest, score of your program will be decided by only 20% of the files, i.e. by 4 files, each from one group. However the verdict of your program will be based on all the test files, i.e. in order to get an AC, your program should work correctly on all the test files.

### Example

<pre><b>Input:</b>
<tt>1
JDCJPGROIE
YFGWDIYAFVMMA
23 32 4
0 34 26 11 18 27 14 28 21 22 13 16 14 15 17 25 28 25 24 31 26 39 28 25 25 32
17 0 18 24 23 21 20 22 24 23 29 11 20 18 13 24 21 21 27 23 27 11 10 13 24 16
25 30 0 15 38 33 22 26 24 11 34 24 13 21 23 29 16 38 28 21 27 32 34 24 33 37
26 27 22 0 38 37 28 17 25 11 29 37 20 26 30 25 31 34 13 26 26 30 20 16 25 25
28 26 22 29 0 34 33 32 28 19 16 27 24 22 34 28 13 15 12 25 31 29 27 16 18 24
23 22 21 18 22 0 21 25 16 16 26 33 10 26 20 29 22 22 26 26 11 29 20 25 23 29
24 25 23 24 26 32 0 20 22 23 22 24 11 31 21 11 14 23 28 17 29 25 21 11 11 19
27 16 24 30 29 24 23 0 13 13 12 23 22 12 29 31 31 22 22 13 25 20 26 25 34 32
14 24 22 25 26 18 28 22 0 30 10 21 28 29 31 30 18 20 22 10 29 21 20 28 39 29
15 19 11 26 27 37 29 26 29 0 28 30 24 30 28 18 27 30 18 28 36 30 27 18 29 26
23 21 25 18 38 25 27 34 12 21 0 11 22 24 32 24 23 26 24 22 36 32 30 33 33 21
12 36 30 17 30 14 26 31 13 26 23 0 24 23 29 13 30 16 30 23 25 34 19 26 22 27
13 22 15 24 26 21 20 15 11 26 21 29 0 20 10 31 29 31 19 21 21 32 21 25 31 27
27 34 29 23 34 12 11 28 25 28 32 34 14 0 24 19 25 24 33 23 13 28 22 13 22 23
26 33 26 21 16 11 10 23 27 27 32 24 21 29 0 21 19 27 26 25 22 29 11 15 21 29
16 26 31 14 25 29 26 28 11 22 21 24 30 23 33 0 27 12 27 21 26 32 16 28 11 27
24 28 26 23 37 32 31 26 22 34 32 21 11 31 21 22 0 34 14 20 28 25 32 10 31 26
25 23 21 29 33 36 39 20 33 10 32 34 23 32 33 28 27 0 28 26 16 31 33 16 24 36
31 14 30 34 37 24 30 22 17 23 23 25 27 32 27 27 21 21 0 20 35 17 21 21 17 12
33 19 31 22 34 21 26 23 28 31 26 30 29 31 32 20 27 21 26 0 30 11 16 32 31 24
18 25 30 29 33 28 27 15 28 19 19 22 32 27 17 33 32 11 37 28 0 35 21 21 35 39
33 27 31 28 32 10 28 23 26 20 33 25 20 35 27 28 26 10 24 24 19 0 30 26 33 13
34 28 15 14 18 19 10 12 25 25 23 29 21 18 31 21 11 18 25 21 28 18 0 21 21 27
28 23 35 13 31 25 25 30 23 24 33 34 33 35 28 12 34 24 26 10 18 15 26 0 23 28
25 31 23 24 28 27 20 22 23 32 11 13 30 28 38 26 21 28 17 31 38 22 10 31 0 29
26 14 22 29 25 13 33 33 26 11 34 25 23 32 27 15 32 16 11 14 24 23 23 27 26 0</tt>

<b>Output:</b>
<tt>13
R 1 Y
R 2 F
R 3 G
R 4 W
R 5 D
R 6 I
R 7 Y
R 8 A
R 9 F
R 10 V
I 10 M
I 11 M
I 12 A</tt>
</pre>### Explanation

In this test case we have **10** ≤ **Ri, j** ≤ **100 (i ≠ j)**. This is made only to fit the test case on the screen. In the actual test cases, the inequality **1000** ≤ **Ri, j** ≤ **10000** will hold.
